<?php

namespace App\Services\Bots\OnlineCarParts;

use App\Models\Ocp\Product;
use App\Models\Ocp\SearchAjax;
use App\Models\Ocp\SearchPage;
use App\Models\Ocp\SearchPageProduct;
use App\Packages\Fuzz;
use Illuminate\Support\Facades\Log;

/** A bridge between Scraper and Bot. Attempts to use already fetched data */
class DataProvider
{
    private readonly \Psr\Log\LoggerInterface $logger;

    public function __construct(private readonly Scraper $scraper)
    {
    }

    public function getProductPage(string $url)
    {
        $product = Product::where('url', $url)->first();
        if ($product) {
            return ProductPage::fromBigData($product);
        }

        $productPage = $this->scraper->getProductPage($url);
        $productPage->saveToBigData();

        return $productPage;
    }

    public function getSearchPage(string $keyword, bool $isOem, ?int $brandId)
    {
        $type = $isOem ? 'oem' : 'keyword';
        $searchPage = SearchPage::where('keyword', $keyword)->where('type', $type)->first();

        return $searchPage ?? $this->scraper->updateOrCreateSearchPage($keyword, $isOem, $brandId);
    }

    public function getSearchPageProductLinks(SearchPage $searchPage, int $pageNumber, ?string $articleNo)
    {
        $isAlreadyFetched = $searchPage->fetched_pages !== null && in_array($pageNumber, $searchPage->fetched_pages);
        if ($isAlreadyFetched) {
            // $this->logger->info("Using already fetched data for page $pageNumber in $searchPage->url");
            $query = $searchPage->products()->where('page', $pageNumber);
            if ($articleNo) {
                $query->where('article_no', $articleNo);
            }

            return $query->orderBy('index')->pluck('url');
        }

        $items = $this->scraper->getSearchPageProducts($searchPage, $pageNumber);

        $values = $items->values()->map(fn ($item, $i) => [
            'url' => $item['url'],
            'search_page_id' => $searchPage->id,
            'index' => $i,
            'article_no' => $item['articleNo'],
            'page' => $pageNumber,
        ])->all();

        SearchPageProduct::insertOrIgnore($values);

        $searchPage->fetched_pages = array_merge($searchPage->fetched_pages ?? [], [$pageNumber]);
        $searchPage->save();
        // $this->logger->info("Saved new data for page $pageNumber in $searchPage->url");

        if ($articleNo !== null) {
            $commonizedKeyword = Fuzz::regexify($articleNo);
            $items = $items->filter(fn ($item) => Fuzz::regexifyNullable($item['articleNo']) === $commonizedKeyword);
        }

        return $items->pluck('url');
    }

    public function getSearchAjaxProductLinks(SearchAjax $searchAjax, ?string $brandName, ?string $articleNo)
    {
        if ($searchAjax->fetched_products !== null) {
            $products = $searchAjax->fetched_products;
        } else {
            $products = $this->scraper
                ->getSearchAjaxProducts($searchAjax)
                ->filter(fn ($p) => $p['url'] && ! str_contains($p['url'], '/tyres-shop/'));

            $searchAjax->fetched_products = $products;
            $searchAjax->save();
        }

        if ($brandName) {
            $products = $products->filter(fn ($p) => Fuzz::isEqual($p['brandName'], $brandName));
        }
        if ($articleNo) {
            $products = $products->filter(fn ($p) => Fuzz::isEqual($p['articleNo'], $articleNo));
        }

        return $products->pluck('url');
    }

    public function getSearchAjax(string $keyword)
    {
        $url = 'https://www.onlinecarparts.co.uk/ajax/search/autocomplete?keyword='.urlencode($keyword);

        return SearchAjax::updateOrCreate(['keyword' => $keyword], ['url' => $url]);
    }
}
