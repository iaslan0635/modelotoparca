<?php

namespace App\Services\Bots\OnlineCarParts;

use App\Models\Ocp\Product;
use App\Models\Ocp\SearchPage;

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

        return $this->scraper->getProductPage($url);
    }

    public function getSearchPage(string $keyword, bool $isOem)
    {
        $type = $isOem ? 'oem' : 'keyword';
        $searchPage = SearchPage::where("keyword", $keyword)->where("type", $type)->first();
        return $searchPage ?? $this->scraper->getSearchPage($keyword, $isOem);
    }

    public function getSearchPageProductLinks(SearchPage $searchPage, int $pageNumber, ?int $brandId, ?string $articleNo)
    {
        $dbPageSize = $searchPage->products()->wherePivot("page", $pageNumber)->count();
        if ($dbPageSize > 15) \Log::warning("Onlinecarparts page size is above 15 ($dbPageSize) for page $pageNumber in $searchPage->url");

        $isDbComplete = $dbPageSize === 15;
        if (!$isDbComplete) return $this->scraper->getSearchPageProductLinks($searchPage, $pageNumber, $brandId, $articleNo);

        $query = $searchPage->products()->wherePivot("page", $pageNumber)->orderByPivot("index");
        if ($brandId) $query->where("brand_id", $brandId);
        if ($articleNo) $query->where("article_no", $articleNo);

        return $query->pluck("url");
    }
}
