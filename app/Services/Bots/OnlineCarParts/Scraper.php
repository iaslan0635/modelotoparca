<?php

namespace App\Services\Bots\OnlineCarParts;

use App\Models\Ocp\Product;
use App\Models\Ocp\SearchPage;
use App\Services\Bots\OcpClient;
use App\Services\Bots\OnlineCarParts;
use Symfony\Component\DomCrawler\Crawler;

class Scraper
{
    public function getSearchPage(string $keyword, bool $isOem)
    {
        $url = $isOem
            ? 'https://www.onlinecarparts.co.uk/oenumber/' . OnlineCarParts::commonizeString($keyword) . '.html?'
            : 'https://www.onlinecarparts.co.uk/spares-search.html?keyword=' . urlencode($keyword);

        $crawler = new Crawler(OcpClient::request($url));

        $brands = $crawler->filter('.brand-slider__item')->each(fn(Crawler $el) => $el->filter('img')->attr('alt'));

        $pageEls = $crawler->filter('.listing-pagination__item[data-pagination-page]');
        $pageCount = (int)$pageEls->last()->text();

        $type = $isOem ? 'oem' : 'keyword';
        $categories = $crawler->filter('.catalog-line-slider .catalog-grid-item__name span')->each(fn(Crawler $el) => $el->text());

        return new SearchPage(compact('keyword', 'pageCount', 'type', 'url', 'brands', 'categories'));
    }

    public function getSearchPageProductLinks(string $url, ?string $articleNo)
    {
        $crawler = new Crawler(OcpClient::request($url));
        $productEls = $crawler->filter('.product-card:not([data-recommended-products])');

        if ($articleNo !== null) {
            $commonizedKeyword = OnlineCarParts::commonizeString($articleNo);
            $productEls = $productEls->reduce(
                function (Crawler $el) use ($commonizedKeyword) {
                    $artklEl = $el->filter('.product-card__artkl span');

                    return $artklEl->count() != 0 && OnlineCarParts::commonizeString($artklEl->innerText()) === $commonizedKeyword;
                }
            );
        }

        $links = $productEls->each(function (Crawler $el) {
            $linkEl = $el->filter('.product-card__title-link');
            return $linkEl->attr('href') ?? $linkEl->attr('data-link');
        });

        return collect($links)->filter(fn(?string $link) => $link && !str_contains($link, '/tyres-shop/'));
    }

    public function getProduct(string $url): Product
    {
        return new Product();
    }
}
