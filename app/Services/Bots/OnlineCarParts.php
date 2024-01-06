<?php

namespace App\Services\Bots;

use App\Models\BotProduct;
use App\Models\Log;
use App\Models\Product;
use App\Models\ProductCar;
use App\Models\ProductOem;
use App\Packages\Utils;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;

class OnlineCarParts
{
    private string $logSuffix;

    public function __construct(
        public string  $keyword,
        public int     $product_id,
        public string  $field,
        public ?string $brand_filter = null
    )
    {
        $this->logSuffix = $this->brand_filter ? " | Marka filtresi: $brand_filter" : '';
    }

    public function searchProducts()
    {
        $url = $this->field === "oem_codes"
            ? "https://www.onlinecarparts.co.uk/oenumber/" . self::commonizeString($this->keyword) . ".html"
            : "https://www.onlinecarparts.co.uk/spares-search.html?keyword=" . urlencode($this->keyword);

        if ($this->brand_filter !== null) {
            $brandId = self::findBrandIdFromSearchPage($url, $this->brand_filter);
            if ($brandId !== null) $url .= "&brand[]=" . $brandId;
            else return [];
        }

        $crawler = new Crawler(OcpClient::request($url));
        // TODO: pagination

        $productEls = $crawler->filter(".product-card:not([data-recommended-products])");

        if (
            $this->field === "producercode" ||
            $this->field === "producercode2" ||
            $this->field === "cross_code" ||
            $this->field === "abk"
        ) {
            $commonizedKeyword = self::commonizeString($this->keyword);
            $productEls = $productEls->reduce(
                function (Crawler $el) use ($commonizedKeyword) {
                    $artklEl = $el->filter(".product-card__artkl span");
                    return $artklEl->count() != 0 && self::commonizeString($artklEl->innerText()) === $commonizedKeyword;
                }
            );
        }

        $links = $productEls->each(function (Crawler $el) {
            $linkEl = $el->filter(".product-card__title-link");
            return $linkEl->attr("href") ?? $linkEl->attr("data-link");
        });
        $links = array_filter($links); // remove nulls
        return array_filter($links, fn(string $link) => !str_contains($link, '/tyres-shop/'));
    }

    public function smash(): bool
    {
        $links = $this->searchProducts();
        if (count($links) === 0) {
            Log::create([
                'product_id' => $this->product_id,
                'message' => "Ürün bulunamadı, Anahtar Kelime: $this->keyword$this->logSuffix",
            ]);

            return false;
        }

        $successfulProductCount = 0;
        foreach ($links as $link) {
            if (self::scrapePage($link))
                $successfulProductCount++;
        }

        Log::create([
            'product_id' => $this->product_id,
            'message' => "$successfulProductCount Adet ürün çekildi. Anahtar Kelime: $this->keyword$this->logSuffix",
        ]);

        return $successfulProductCount > 0;
    }

    public function scrapePage(string $link): bool
    {
        $connection = BotProduct::firstOrNew(
            ['product_id' => $this->product_id, 'url' => $link],
            ['origin_field' => $this->field, "keyword" => $this->keyword]
        );
        if ($connection->is_banned) return false;

        $ocpp = self::getProduct($link);
        DB::connection('bigdata')->transaction(
            fn() => $this->saveOcpProductToBigData($ocpp)
        );
        DB::transaction(function () use ($ocpp, $connection) {
            $this->saveOcpProductToDatabase($ocpp);
            $connection->save();
        });
        return true;
    }

    public static function normalizeColumnName(string $string): string
    {
        return trim($string, ": \t\n\r\0\x0B");
    }

    public static function getProduct(string $url): OcpProduct
    {
        $crawler = new Crawler(OcpClient::request($url));

        $oems = array_merge(...$crawler->filter(".product-oem__link")->each(function (Crawler $el) {
            $text = $el->innerText(); // "AUDI / SKODA / VW - OE-N 012 412 1" || "FORD - OE-1833857"
            [$brandsStr, $code] = explode(" - OE-", $text);
            $brands = explode(" / ", $brandsStr);
            return array_map(fn(string $brand) => ["brand" => $brand, "oem" => $code], $brands);
        }));

        $specs = Utils::fromEntries($crawler->filter("table.product__table tr")->each(function (Crawler $row) {
            [$key, $value] = $row->filter("td")->each(fn(Crawler $col) => $col->innerText());
            return [self::normalizeColumnName($key), $value];
        }));

        $makerIds = $crawler->filter(".compatibility__maker-title")->each(fn(Crawler $el) => $el->attr("data-maker-id"));
        $ocpProductId = Utils::regex('/-(\d+)\.html/', $url, 1);
        if ($ocpProductId === null) throw new \Exception("ID not found in URL: $url");

        $_artkl = $crawler->filter(".product__artkl")->innerText();
        $articleId = Utils::regex("/Article №: ([^ ]+)/", $_artkl, 1);
        if ($articleId === null) throw new \Exception("Article ID not found in artkl: $_artkl");

        $vehicles = self::getVehicleIds($ocpProductId, $makerIds);

        $tecdoc = Utils::fromEntries(
            $crawler->filter(".product-analogs__wrapper li")
                ->each(fn(Crawler $el) => [
                    self::normalizeColumnName($el->filter("span")->innerText()),
                    $el->innerText()
                ])
        );

        $subtitle = $crawler->filter(".product__subtitle")->innerText();

        $metadata = json_decode(
            $crawler
                ->filter('script[type="application/ld+json"]')
                ->reduce(fn(Crawler $el) => json_decode($el->text())->{'@type'} === 'Product')
                ->text()
        );

        return new OcpProduct(
            url: $url,
            id: $ocpProductId,
            articleId: $articleId,
            oems: $oems,
            specs: $specs,
            vehicles: $vehicles,
            tecdoc: $tecdoc,
            title: $metadata->name,
            subtitle: $subtitle,
            brand: $metadata->brand->name,
            images: Arr::wrap($metadata->image), // $metadata->image is sometimes string, sometimes array of strings
            category: $metadata->category ?? "NO CATEGORY",
            mpn: $metadata->mpn,
            sku: $metadata->sku,
            gtin13: $metadata->gtin13,
        );
    }

    public static function getVehicleIds(string|int $ocpProductId, array $makerIds)
    {
        $vehicleIds = [];
        foreach ($makerIds as $makerId) {
            $crawler = new Crawler(OcpClient::request("https://www.onlinecarparts.co.uk/ajax/product/related-auto?productId=$ocpProductId&makerId=$makerId"));
            $modelIds = $crawler->filter("[data-model-id]")->each(fn(Crawler $el) => $el->attr("data-model-id"));
            foreach ($modelIds as $modelId) {
                $vehicles = json_decode(OcpClient::request("https://www.onlinecarparts.co.uk/ajax/product/related/vehicles?articleId=$ocpProductId&makerId=$makerId&modelId=$modelId"))->vehicles;
                array_push($vehicleIds, ...collect($vehicles)->pluck("id"));
            }
        }

        return $vehicleIds;
    }

    public static function findBrandIdFromSearchPage(string $searchPageUrl, string $brand): ?string
    {
        $commonizedBrand = self::commonizeString($brand);
        $crawler = new Crawler(OcpClient::request($searchPageUrl));
        $foundBrandEls = $crawler->filter(".brand-slider__item")
            ->reduce(fn(Crawler $el) => self::commonizeString($el->filter("img")->attr("alt")) === $commonizedBrand);
        if ($foundBrandEls->count() < 1) return null;
        return $foundBrandEls->eq(0)->filter("input")->attr("value");
    }

    public static function commonizeString(string $string): string
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $string));
    }

    public function saveOcpProductToDatabase(OcpProduct $ocpp): void
    {
        ProductOem::insertOrIgnore(array_map(fn($oem) => array_merge($oem, ['logicalref' => $this->product_id]), $ocpp->oems));

        $product = Product::findOrFail($this->product_id, ['id', 'tecdoc', 'specifications']);
        $product->update([
            'specifications' => $ocpp->specs,
            'tecdoc' => array_merge($product->tecdoc ?? [], $ocpp->tecdoc),
        ]);

        ProductCar::insertOrIgnore(
            array_map(fn($vehicleId) => [
                'logicalref' => $this->product_id,
                'car_id' => $vehicleId,
            ], $ocpp->vehicles)
        );
    }

    public static function saveOcpProductToBigData(OcpProduct $ocpp): void
    {
        $db = DB::connection('bigdata');

        $db->table("products")->updateOrInsert(
            ['id' => $ocpp->id],
            [
                'title' => $ocpp->title,
                'subtitle' => $ocpp->subtitle,
                'brand' => $ocpp->brand,
                'specifications' => json_encode($ocpp->specs),
                'tecdoc' => json_encode($ocpp->tecdoc),
                'images' => json_encode($ocpp->images),
                'category' => $ocpp->category,
                'mpn' => $ocpp->mpn,
                'sku' => $ocpp->sku,
                'gtin13' => $ocpp->gtin13,
                'url' => $ocpp->url,
            ]
        );

        $db->table("product_oems")->insertOrIgnore(array_map(fn($oem) => array_merge($oem, ["product_id" => $ocpp->id]), $ocpp->oems));

        $db->table("product_cars")->insertOrIgnore(
            array_map(fn($vehicleId) => [
                'product_id' => $ocpp->id,
                'car_id' => $vehicleId,
            ], $ocpp->vehicles)
        );
    }
}
