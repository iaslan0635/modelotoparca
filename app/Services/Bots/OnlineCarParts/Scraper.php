<?php

namespace App\Services\Bots\OnlineCarParts;

use App\Models\Ocp\Brand;
use App\Models\Ocp\SearchPage;
use App\Packages\Fuzz;
use App\Packages\Utils;
use App\Services\Bots\OcpClient;
use Illuminate\Support\Arr;
use Symfony\Component\DomCrawler\Crawler;

class Scraper
{
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

    protected function normalizeColumnName(string $string): string
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

    public function getSearchPage(string $keyword, bool $isOem)
    {
        $url = $isOem
            ? 'https://www.onlinecarparts.co.uk/oenumber/' . Fuzz::regexify($keyword) . '.html?'
            : 'https://www.onlinecarparts.co.uk/spares-search.html?keyword=' . urlencode($keyword);

        $crawler = new Crawler(OcpClient::request($url));

        $brands = $crawler->filter('.brand-slider__item')->each(fn(Crawler $el) => Brand::create([
            'name' => $el->filter('img')->attr('alt'),
            'value' => $el->filter('input')->attr('value'),
        ]));

        $pageEls = $crawler->filter('.listing-pagination__item[data-pagination-page]');
        $pageCount = (int)$pageEls->last()->text();

        $type = $isOem ? 'oem' : 'keyword';
        $categories = $crawler->filter('.catalog-line-slider .catalog-grid-item__name span')->each(fn(Crawler $el) => $el->text());

        $searchPage = SearchPage::create(compact('keyword', 'pageCount', 'type', 'url', 'categories'));
        $searchPage->brands()->sync($brands);
        return $searchPage;
    }

    public function getSearchPageProductLinks(string $url, ?string $articleNo)
    {
        $crawler = new Crawler(OcpClient::request($url));
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
}
