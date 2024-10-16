<?php

namespace App\Services\Bots\OnlineCarParts;

use App\Models\Ocp\SearchAjax;
use App\Models\Ocp\SearchPage;
use App\Packages\Utils;
use App\Services\Bots\OcpClient;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Spatie\Url\Url;
use Symfony\Component\DomCrawler\Crawler;

/** Responsible for scraping and parsing. Intended to be used only by DataProvider */
class Scraper
{
    public function updateOrCreateSearchPage(string $keyword, bool $isOem, ?int $brand_id)
    {
        $url = SearchPage::makeUrl($keyword, $isOem, $brand_id);
        $crawler = new Crawler(OcpClient::request($url));

        $pageEls = $crawler->filter('.listing-pagination__item[data-pagination-page]');
        $pageCount = $pageEls->count() > 0 ? (int) $pageEls->last()->text() : 1;

        $type = $isOem ? 'oem' : 'keyword';
        $categories = $crawler->filter('.catalog-line-slider .catalog-grid-item__name span')->each(fn (Crawler $el) => $el->text());

        return SearchPage::updateOrCreate(compact('url'), compact('keyword', 'pageCount', 'type', 'categories', 'brand_id'));
    }

    public function getSearchPageProducts(SearchPage $searchPage, int $pageNumber)
    {
        $url = Url::fromString($searchPage->url)->withQueryParameter('page', $pageNumber);

        $crawler = new Crawler(OcpClient::request((string) $url));
        $productEls = $crawler->filter('.product-card:not([data-recommended-products])');

        $items = $productEls->each(function (Crawler $el) {
            $linkEl = $el->filter('.product-card__title-link');
            $url = $linkEl->attr('href') ?? $linkEl->attr('data-link');

            $artklEl = $el->filter('.product-card__artkl span');
            $articleNo = $artklEl->count() > 0 ? $artklEl->innerText() : null;

            return compact('url', 'articleNo');
        });

        return collect($items)->filter(fn ($item) => $item['url'] && ! str_contains($item['url'], '/tyres-shop/'));
    }

    public function getSearchAjaxProducts(SearchAjax $searchAjax): Collection
    {
        $url = $searchAjax->url;
        $json = OcpClient::getJson($url);
        $results = $json['results'];

        $productResults = array_filter($results, fn ($result) => $result['meta']['type'] === 'product');

        if (count($productResults) > 1) {
            throw new Exception('Multiple product sections found in search ajax response');
        }
        if (empty($productResults)) {
            return collect();
        } // No results

        return collect(reset($productResults)['values']);
    }

    public function getProductPage(string $url)
    {
        $crawler = new Crawler(OcpClient::request($url));

        $oems = array_merge(...$crawler->filter('.product-oem__link')->each(function (Crawler $el) {
            $text = $el->innerText(); // "AUDI / SKODA / VW - OE-N 012 412 1" || "FORD - OE-1833857"
            [$brandsStr, $code] = explode(' - OE-', $text);
            $brands = explode(' / ', $brandsStr);

            return array_map(fn (string $brand) => ['brand' => $brand, 'oem' => $code], $brands);
        }));

        $specs = Utils::fromEntries($crawler->filter('table.product__table tr')->each(function (Crawler $row) {
            [$key, $value] = $row->filter('td')->each(fn (Crawler $col) => $col->innerText());

            return [$this->normalizeColumnName($key), $value];
        }));

        $makerIds = $crawler->filter('.compatibility__maker-title')->each(fn (Crawler $el) => $el->attr('data-maker-id'));
        $ocpProductId = Utils::regex('/-(\d+)\.html/', $url, 1);
        if ($ocpProductId === null) {
            throw new Exception("ID not found in URL: $url");
        }

        $_artkl = $crawler->filter('.product__artkl')->innerText();
        $articleId = Utils::regex('/Article №: ([^ ]+)/', $_artkl, 1);
        if ($articleId === null) {
            throw new Exception("Article ID not found in artkl: $_artkl");
        }

        $vehicles = $this->getVehicleIds($ocpProductId, $makerIds);

        $tecdoc = Utils::fromEntries(
            $crawler->filter('.product-analogs__wrapper li')
                ->each(fn (Crawler $el) => [
                    $this->normalizeColumnName($el->filter('span')->innerText()),
                    $el->innerText(),
                ])
        );

        $subtitle = $crawler->filter('.product__subtitle')->innerText();

        $metadata = json_decode(
            $crawler
                ->filter('script[type="application/ld+json"]')
                ->reduce(fn (Crawler $el) => json_decode($el->text())->{'@type'} === 'Product')
                ->text()
        );

        return new ProductPage(
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
            category: $metadata->category ?? 'NO CATEGORY',
            mpn: $metadata->mpn,
            sku: $metadata->sku,
            gtin13: $metadata->gtin13,
        );
    }

    private function normalizeColumnName(string $string): string
    {
        return trim($string, ": \t\n\r\0\x0B");
    }

    private function getVehicleIds(string|int $ocpProductId, array $makerIds): array
    {
        $vehicleIds = [];
        foreach ($makerIds as $makerId) {
            $url = "https://www.onlinecarparts.co.uk/ajax/product/related-auto?productId=$ocpProductId&makerId=$makerId";
            $crawler = new Crawler(OcpClient::request($url));
            $modelIds = $crawler->filter('[data-model-id]')->each(fn (Crawler $el) => $el->attr('data-model-id'));
            foreach ($modelIds as $modelId) {
                $modelUrl = "https://www.onlinecarparts.co.uk/ajax/product/related/vehicles?articleId=$ocpProductId&makerId=$makerId&modelId=$modelId";
                $vehicles = OcpClient::getJson($modelUrl)->vehicles;
                $ids = Arr::pluck($vehicles, 'id');
                array_push($vehicleIds, ...$ids);
            }
        }

        return $vehicleIds;
    }
}
