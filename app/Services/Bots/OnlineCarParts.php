<?php

namespace App\Services\Bots;

use App\Models\BotProduct;
use App\Models\Car;
use App\Models\Log;
use App\Models\Maker;
use App\Models\Product;
use App\Models\ProductCar;
use App\Models\ProductOem;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class OnlineCarParts
{
    public static function request(string $url): string
    {
        return Http::get("https://scrape.wmaster.net/" . urlencode($url))
            ->throw()->body();
    }

    public static function smash(string $keyword, int $product_id, ?string $brand_filter = null, string $field = null)
    {
        $url = "https://www.onlinecarparts.co.uk/spares-search.html?keyword=" . urlencode($keyword);
        if ($brand_filter !== null) {
            $brandId = self::findBrandIdFromSearchPage($url, $brand_filter);
            if ($brandId !== null) $url .= "&brand%5B%5D=" . $brandId;
            else return false;
        }

        $crawler = new Crawler(self::request($url));
        // TODO: pagination

        $links = $crawler->filter(".product-card__title-link")->each(fn(Crawler $el) => $el->attr("href") ?? $el->attr("data-link"));

        $logSuffix = $brand_filter ? " | Marka filtresi: $brand_filter" : '';
        if (count($links) === 0) {
            Log::create([
                'product_id' => $product_id,
                'message' => "Ürün bulunamadı, Anahtar Kelime: $keyword$logSuffix",
            ]);

            return false;
        }

        $successfulProductCount = 0;
        foreach ($links as $link) {
            $connection = BotProduct::updateOrCreate(
                ['product_id' => $product_id, 'url' => $link],
                ['origin_field' => $field, "keyword" => $keyword]
            );
            if ($connection->is_banned) continue;

            [
                "oems" => $oems,
                "specs" => $specs,
                "vehicles" => $vehicles,
                "tecdoc" => $tecdoc,
            ] = self::getProduct($link);

            foreach ($oems as $oem) {
                foreach ($oem["brands"] as $brand) {
                    ProductOem::insertOrIgnore([
                        "logicalref" => $product_id,
                        "oem" => $oem["code"],
                        "brand" => $brand,
                    ]);
                }
            }

            Product::where("id", $product_id)->update([
                'specifications' => $specs,
                'tecdoc' => $tecdoc,
            ]);

            foreach ($vehicles as $vehicleId) {
                ProductCar::insertOrIgnore([
                    'logicalref' => $product_id,
                    'car_id' => $vehicleId,
                ]);
            }


            $successfulProductCount++;
        }

        Log::create([
            'product_id' => $product_id,
            'message' => "$successfulProductCount Adet ürün çekildi. Anahtar Kelime: $keyword$logSuffix",
        ]);

        return $successfulProductCount > 0;
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

        $specs = self::fromEntries($crawler->filter("table.product__table tr")->each(function (Crawler $row) {
            [$key, $value] = $row->filter("td")->each(fn(Crawler $col) => $col->innerText());
            return [$key, $value];
        }));

        $makerIds = $crawler->filter(".compatibility__maker-title")->each(fn(Crawler $el) => $el->attr("data-maker-id"));
        preg_match('/-(\d+)\.html/', $url, $matches);
        $articleId = $matches[1];
        $vehicles = self::getVehicleIds($articleId, $makerIds);

        $tecdoc = self::fromEntries(
            $crawler->filter(".product-analogs__wrapper li")
                ->each(fn(Crawler $el) => [$el->filter("span")->innerText(), $el->innerText()])
        );

        // TODO: image
        // TODO: brand

        return compact("oems", "specs", "vehicles", "tecdoc");
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

    /** Object.fromEntries() */
    public static function fromEntries(array $array)
    {
        return array_combine(array_column($array, 0), array_column($array, 1));
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
