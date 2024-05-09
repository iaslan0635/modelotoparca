<?php

namespace App\Services\Bots\OnlineCarParts;

use App\Models\Ocp\Brand;
use App\Models\Ocp\SearchAjax;
use App\Models\Ocp\SearchPage;
use App\Packages\Fuzz;
use App\Packages\Utils;
use App\Services\Bots\OcpClient;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Spatie\Url\Url;
use Symfony\Component\DomCrawler\Crawler;

/** Responsible for scraping and parsing. Intended to be used only by DataProvider */
class Scraper
{
    public function getSearchPage(string $keyword, bool $isOem)
    {
        $url = $isOem
            ? 'https://www.onlinecarparts.co.uk/oenumber/' . Fuzz::regexify($keyword) . '.html?'
            : 'https://www.onlinecarparts.co.uk/spares-search.html?keyword=' . urlencode($keyword);

        $crawler = new Crawler(OcpClient::request($url));

        $brands = $crawler->filter('.brand-slider__item')->each(
            fn(Crawler $el) => Brand::firstOrCreate(
                ['id' => $el->filter('input')->attr('value')],
                ['name' => $el->filter('img')->attr('alt')],
            )
        );

        $pageEls = $crawler->filter('.listing-pagination__item[data-pagination-page]');
        $pageCount = $pageEls->count() > 0 ? (int)$pageEls->last()->text() : 1;

        $type = $isOem ? 'oem' : 'keyword';
        $categories = $crawler->filter('.catalog-line-slider .catalog-grid-item__name span')->each(fn(Crawler $el) => $el->text());

        // We trust DataProvider to call this only if it doesn't exist
        $searchPage = SearchPage::create(compact('keyword', 'pageCount', 'type', 'url', 'categories'));
        $searchPage->brands()->sync(array_map(fn(Brand $b) => $b->id, $brands));
        return $searchPage;
    }

    public function getSearchPageProductLinks(SearchPage $searchPage, int $pageNumber, ?int $brandId, ?string $articleNo)
    {
        $url = Url::fromString($searchPage->url)->withQueryParameter('page', $pageNumber);
        if ($brandId) $url = $url->withQueryParameter('brand[]', $brandId);

        $crawler = new Crawler(OcpClient::request((string)$url));
        $productEls = $crawler->filter('.product-card:not([data-recommended-products])');

        if ($articleNo !== null) {
            $commonizedKeyword = Fuzz::regexify($articleNo);
            $productEls = $productEls->reduce(
                function (Crawler $el) use ($commonizedKeyword) {
                    $artklEl = $el->filter('.product-card__artkl span');

                    return $artklEl->count() != 0 && Fuzz::regexify($artklEl->innerText()) === $commonizedKeyword;
                }
            );
        }

        $links = $productEls->each(function (Crawler $el) {
            $linkEl = $el->filter('.product-card__title-link');
            return $linkEl->attr('href') ?? $linkEl->attr('data-link');
        });

        return collect($links)->filter(fn(?string $link) => $link && !str_contains($link, '/tyres-shop/'));
    }

    /** returns a collection of array{type: string, link: string} */
    public function getSearchAjaxProductLinks(SearchAjax $searchAjax, ?int $brandName, ?string $articleNo)
    {
        $url = $searchAjax->url;
        $json = json_decode(OcpClient::request($url), true);

        $results = $json['results'];

        return collect($results)->flatMap(function ($result) use ($articleNo, $brandName) {
            $type = $result['type'];
            $items = collect($result['values'])->filter(fn($item) => !str_contains($item['url'], '/tyres-shop/'));

            if ($brandName) $items = $items->filter(fn($item) => Fuzz::isEqual($item['brandName'], $brandName));
            if ($articleNo) $items = $items->filter(fn($item) => Fuzz::isEqual($item['articleNo'], $articleNo));

            return $items->map(fn($item) => ['type' => $type, 'link' => $item['url']]);
        });
    }

    public function getProductPage(string $url)
    {
        $crawler = new Crawler(OcpClient::request($url));

        $oems = array_merge(...$crawler->filter('.product-oem__link')->each(function (Crawler $el) {
            $text = $el->innerText(); // "AUDI / SKODA / VW - OE-N 012 412 1" || "FORD - OE-1833857"
            [$brandsStr, $code] = explode(' - OE-', $text);
            $brands = explode(' / ', $brandsStr);

            return array_map(fn(string $brand) => ['brand' => $brand, 'oem' => $code], $brands);
        }));

        $specs = Utils::fromEntries($crawler->filter('table.product__table tr')->each(function (Crawler $row) {
            [$key, $value] = $row->filter('td')->each(fn(Crawler $col) => $col->innerText());

            return [$this->normalizeColumnName($key), $value];
        }));

        $makerIds = $crawler->filter('.compatibility__maker-title')->each(fn(Crawler $el) => $el->attr('data-maker-id'));
        $ocpProductId = Utils::regex('/-(\d+)\.html/', $url, 1);
        if ($ocpProductId === null) {
            throw new \Exception("ID not found in URL: $url");
        }

        $_artkl = $crawler->filter('.product__artkl')->innerText();
        $articleId = Utils::regex('/Article №: ([^ ]+)/', $_artkl, 1);
        if ($articleId === null) {
            throw new \Exception("Article ID not found in artkl: $_artkl");
        }

        $vehicles = $this->getVehicleIds($ocpProductId, $makerIds);

        $tecdoc = Utils::fromEntries(
            $crawler->filter('.product-analogs__wrapper li')
                ->each(fn(Crawler $el) => [
                    $this->normalizeColumnName($el->filter('span')->innerText()),
                    $el->innerText(),
                ])
        );

        $subtitle = $crawler->filter('.product__subtitle')->innerText();

        $metadata = json_decode(
            $crawler
                ->filter('script[type="application/ld+json"]')
                ->reduce(fn(Crawler $el) => json_decode($el->text())->{'@type'} === 'Product')
                ->text()
        );

        $productPage = new ProductPage(
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
        $productPage->saveToBigData();
        return $productPage;
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
            $modelIds = $crawler->filter('[data-model-id]')->each(fn(Crawler $el) => $el->attr('data-model-id'));
            foreach ($modelIds as $modelId) {
                $modelUrl = "https://www.onlinecarparts.co.uk/ajax/product/related/vehicles?articleId=$ocpProductId&makerId=$makerId&modelId=$modelId";
                $vehicles = json_decode(OcpClient::request($modelUrl))->vehicles;
                array_push($vehicleIds, ...collect($vehicles)->pluck('id'));
            }
        }

        return $vehicleIds;
    }
}
