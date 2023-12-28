<?php

namespace App\Services\Bots;

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
        // TODO: brand filter

        $crawler = new Crawler(self::request($url));
        // TODO: pagination

        $links = $crawler->filter(".product-card__title-link")->each(fn(Crawler $el) => $el->attr("href"));
//        dd($links);

        foreach ($links as $link) {
            $product = self::getProduct($link);
        }
    }

    public static function getProduct(string $url): array
    {
        $crawler = new Crawler(self::request($url));
        // TODO: fetch TECDOC EQUIVALENTS

        $crawler->filter(".product-oem__link")->each(function (Crawler $el) {
            $text = $el->innerText(); // AUDI / PORSCHE / SEAT / SKODA / VW - OE-N 013 806 2
            dd($text);
//            [$brands, $code] = explode("")

        });
    }
}
