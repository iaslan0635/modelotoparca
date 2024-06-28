<?php

namespace App\Services\Bots\OnlineCarParts;

use App\Models\Ocp\Product;
use App\Models\Ocp\SearchAjax;
use App\Models\Ocp\SearchPage;
use App\Packages\Fuzz;
use App\Services\Bots\OcpClientException;
use Symfony\Component\DomCrawler\Crawler;

/** A bridge between Scraper and Bot. Attempts to use already fetched data */
class DataProvider
{
    private Scraper $scraper;

    public function __construct()
    {
        $this->scraper = new Scraper();
    }

    public function getProductPage(string $url)
    {
        $product = Product::where("url", $url)->first();
        if ($product) return ProductPage::fromBigData($product);

        $productPage = $this->scraper->getProductPage($url);
        $productPage->saveToBigData();
        return $productPage;
    }

    /**
     * @param string $keyword
     * @param bool $isOem
     * @return SearchPage
     * @throws OcpClientException
     */
    public function getSearchPage(string $keyword, bool $isOem)
    {
        $type = $isOem ? 'oem' : 'keyword';
        $searchPage = SearchPage::where("keyword", $keyword)->where("type", $type)->first();
        return $searchPage ?? $this->scraper->getAndSaveSearchPage($keyword, $isOem);
    }

    public function getSearchPageProductLinks(SearchPage $searchPage, int $pageNumber, ?int $brandId, ?string $articleNo)
    {
        $dbPageSize = $searchPage->products()->where("page", $pageNumber)->count();
        if ($dbPageSize > 15) \Log::error("Onlinecarparts page size is above 15 ($dbPageSize) for page $pageNumber in $searchPage->url");

        $isDbComplete = $dbPageSize === 15;
        if ($isDbComplete) {
            $query = $searchPage->products()->wherePivot("page", $pageNumber)->orderByPivot("index");
            if ($brandId) $query->where("brand_id", $brandId);
            if ($articleNo) $query->where("article_no", $articleNo);

            return $query->pluck("url");
        }

        $items = $this->scraper->getSearchPageProducts($searchPage, $pageNumber, $brandId);

        if ($articleNo !== null) {
            $commonizedKeyword = Fuzz::regexify($articleNo);
            $items = $items->filter(fn($item) => Fuzz::regexifyNullable($item['articleNo']) === $commonizedKeyword);
        }

        return $items->pluck('url');
    }

    public function getSearchAjaxProductLinks(SearchAjax $searchAjax, ?string $brandName, ?string $articleNo)
    {
        if ($searchAjax->fetched_products !== null) {
            $products = $searchAjax->fetched_products;
        } else {
            $products = $this->scraper->getSearchAjaxProducts($searchAjax);
            $searchAjax->fetched_products = $products;
            $searchAjax->save();
        }

        if ($brandName) $products = $products->filter(fn($p) => Fuzz::isEqual($p['brandName'], $brandName));
        if ($articleNo) $products = $products->filter(fn($p) => Fuzz::isEqual($p['articleNo'], $articleNo));

        return $products->pluck('url')->filter(fn($url) => !str_contains($url, '/tyres-shop/'));
    }

    public function getSearchAjax(string $keyword)
    {
        $url = "https://www.onlinecarparts.co.uk/ajax/search/autocomplete?keyword=" . urlencode($keyword);
        return SearchAjax::firstOrCreate(["keyword" => $keyword], ["url" => $url]);
    }
}
