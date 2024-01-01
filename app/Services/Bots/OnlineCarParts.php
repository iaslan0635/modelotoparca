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

    public static function request(string $url): string
    {
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_3);
        curl_setopt($curlHandle, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 12; sdk_gphone64_x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Mobile Safari/537.36');
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curlHandle);

        if (curl_errno($curlHandle)) throw new \Exception(curl_error($curlHandle));
        if (str_contains($response, '<title>Just a moment...</title>')) throw new \Exception("Response blocked by cloudflare.");

        $httpStatusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
        if (!($httpStatusCode >= 200 && $httpStatusCode < 300))
            throw new \Exception("Http request failed with status code $httpStatusCode");

        curl_close($curlHandle);
        return $response;
    }

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
        $url = $this->field === "oem"
            ? "https://www.onlinecarparts.co.uk/oenumber/" . self::commonizeString($this->keyword) . ".html"
            : "https://www.onlinecarparts.co.uk/spares-search.html?keyword=" . urlencode($this->keyword);

        if ($this->brand_filter !== null) {
            $brandId = self::findBrandIdFromSearchPage($url, $this->brand_filter);
            if ($brandId !== null) $url .= "&brand%5B%5D=" . $brandId;
            else return false;
        }

        $crawler = new Crawler(self::request($url));
        // TODO: pagination

        return $crawler
            ->filter(".product-card:not([data-recommended-products]) .product-card__title-link")
            ->each(fn(Crawler $el) => $el->attr("href") ?? $el->attr("data-link"));
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
            if (DB::transaction(fn() => self::scrapePage($link)))
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
        $connection = BotProduct::updateOrCreate(
            ['product_id' => $this->product_id, 'url' => $link],
            ['origin_field' => $this->field, "keyword" => $this->keyword]
        );
        if ($connection->is_banned) return false;

        [
            "oems" => $oems,
            "specs" => $specs,
            "vehicles" => $vehicles,
            "tecdoc" => $tecdoc,
        ] = self::getProduct($link);


        $oemsToInsert = [];
        foreach ($oems as $oem) {
            foreach ($oem["brands"] as $brand) {
                $oemsToInsert[] = [
                    "logicalref" => $this->product_id,
                    "oem" => $oem["code"],
                    "brand" => $brand,
                ];
            }
        }
        ProductOem::insertOrIgnore($oemsToInsert);

        $product = Product::find($this->product_id, ['id', 'tecdoc', 'specifications']);
        $originalTecdoc = Arr::mapWithKeys($product->tecdoc, fn($v, $k) => [trim($k, ": \t\n\r\0\x0B") => $v]);
        $product->update([
            'specifications' => $specs,
            'tecdoc' => array_merge($originalTecdoc, $tecdoc),
        ]);

        ProductCar::insertOrIgnore(
            array_map(fn($vehicleId) => [
                'logicalref' => $this->product_id,
                'car_id' => $vehicleId,
            ], $vehicles)
        );

        return true;
    }

    public static function getProduct(string $url)
    {
        $crawler = new Crawler(self::request($url));

        $oems = $crawler->filter(".product-oem__link")->each(function (Crawler $el) {
            $text = $el->innerText(); // "AUDI / SKODA / VW - OE-N 012 412 1" || "FORD - OE-1833857"
            [$brandsStr, $code] = explode(" - OE-", $text);
            $brands = explode(" / ", $brandsStr);
            return compact("brands", "code");
        });

        $specs = Utils::fromEntries($crawler->filter("table.product__table tr")->each(function (Crawler $row) {
            [$key, $value] = $row->filter("td")->each(fn(Crawler $col) => $col->innerText());
            return [$key, $value];
        }));

        $makerIds = $crawler->filter(".compatibility__maker-title")->each(fn(Crawler $el) => $el->attr("data-maker-id"));
        $articleId = Utils::regex('/-(\d+)\.html/', $url, 1);
        $vehicles = self::getVehicleIds($articleId, $makerIds);

        $tecdoc = Utils::fromEntries(
            $crawler->filter(".product-analogs__wrapper li")
                ->each(fn(Crawler $el) => [trim($el->filter("span")->innerText(), ": \t\n\r\0\x0B"), $el->innerText()])
        );

        $name = $crawler->filter(".product__title")->innerText();
        $subTtile = $crawler->filter(".product__subtitle")->innerText();

        $brand = Utils::regex('/Manufacturer: (\w+)/', $crawler->filter(".product__artkl")->innerText(), 1);

        // TODO: image

        return compact("oems", "specs", "vehicles", "tecdoc", "name", "subTtile", "brand");
    }

    public static function getVehicleIds(string|int $articleId, array $makerIds)
    {
        $vehicleIds = [];
        foreach ($makerIds as $makerId) {
            $crawler = new Crawler(self::request("https://www.onlinecarparts.co.uk/ajax/product/related-auto?productId=$articleId&makerId=$makerId"));
            $modelIds = $crawler->filter("[data-model-id]")->each(fn(Crawler $el) => $el->attr("data-model-id"));
            foreach ($modelIds as $modelId) {
                $vehicles = json_decode(self::request("https://www.onlinecarparts.co.uk/ajax/product/related/vehicles?articleId=$articleId&makerId=$makerId&modelId=$modelId"))->vehicles;
                array_push($vehicleIds, ...collect($vehicles)->pluck("id"));
            }
        }

        return $vehicleIds;
    }

    public static function findBrandIdFromSearchPage(string $searchPageUrl, string $brand): ?string
    {
        $commonizedBrand = self::commonizeString($brand);
        $crawler = new Crawler(self::request($searchPageUrl));
        $foundBrandEls = $crawler->filter(".brand-slider__item")
            ->reduce(fn(Crawler $el) => self::commonizeString($el->filter("img")->attr("alt")) === $commonizedBrand);
        if ($foundBrandEls->count() < 1) return false;
        return $foundBrandEls->eq(0)->filter("input")->attr("value");
    }

    public static function commonizeString(string $string): string
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $string));
    }
}
