<?php

namespace App\Packages;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductOem;
use Elastic\ScoutDriverPlus\Builders\BoolQueryBuilder;
use Elastic\ScoutDriverPlus\Builders\QueryBuilderInterface;
use Elastic\ScoutDriverPlus\Decorators\Hit;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class Search
{
    private static function carQuery(string $term)
    {
        return Query::nested()
            ->path('cars')
            ->query(Query::match()->field('cars.regex_name')->query(preg_replace('/[^\w\s]/', '', $term)));
    }

    private static function oemQuery(string $cleanTerm)
    {
        return Query::nested()
            ->path('oems')
            ->query(Query::match()->field('oems.oem')->query($cleanTerm));
    }

    private static function productQuery(string $cleanTerm)
    {
        return Query::multiMatch()
            ->fields([
                'title',
                'sub_title',
                'cross_code',
                'producercode',
                'producercode2',
                'similar_product_codes',
            ])
            ->query($cleanTerm)
            ->analyzer("turkish_analyzer")
            ->fuzziness('AUTO');
    }

    private static function suggestions(string $term)
    {
        $oemSuggestQuery = Query::bool()
            ->should(Query::prefix()->field('oem')->value($term)->caseInsensitive(true));

        $suggestionOems = ProductOem::searchQuery($oemSuggestQuery)->highlight('oem', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->execute();

        $suggestions = [];
        foreach ($suggestionOems->highlights() as $highlight)
            foreach ($highlight->raw()["oem"] as $item)
                $suggestions[] = $item;

        return $suggestions;
    }

    private static function brandFilter(array $ids)
    {
        return Query::nested()
            ->path('brand')
            ->query(Query::terms()->field('brand.id')->values($ids));
    }

    private static function priceFilter(int|null $min, int|null $max)
    {
        $filter = Query::range()
            ->field('price');

        if ($min !== null) $filter->gte(request()->input('min_price', 0));
        if ($max !== null) $filter->lte(request()->input('max_price', 99999));

        return $filter;
    }

    private static function paginateProducts(BoolQueryBuilder $finalQuery, string|null $sortBy)
    {
        $products = Product::searchQuery($finalQuery)
            ->highlight('title')
            ->highlight('sub_title')
            ->highlight('cross_code')
            ->highlight('producercode')
            ->highlight('producercode2')
            ->highlight('similar_product_codes')
            ->highlight('oems.oem')
            ->highlight('cars.name')
            ->highlight('cars.regex_name');

        if ($sortBy === 'price-asc') {
            $products->sort('price');
        } elseif ($sortBy === 'price-desc') {
            $products->sort('price', 'desc');
        }

        return $products->paginate(12);
    }

    private static function results(BoolQueryBuilder $finalQuery, BoolQueryBuilder $finalQueryWithoutBrandFilter, string|null $sortBy, string $term)
    {
        $products = self::paginateProducts($finalQuery, $sortBy);

        $productsWithCategories = Product::searchQuery($finalQuery)
            ->refineModels(fn(Builder $q) => $q->select(["id"]))
            ->load(['categories'])->size(1000)->execute()->models();

        $productsWithBrand = Product::searchQuery($finalQueryWithoutBrandFilter)
            ->refineModels(fn(Builder $q) => $q->select(["id", "brand_id"]))
            ->load(['brand'])->size(1000)->execute()->models();

        $categories = $productsWithCategories
            ->map(fn(Product $product) => $product->categories)->flatten()
            ->groupBy("id")
            ->map(fn(Collection $cats) => [
                "category" => $cats[0],
                "count" => $cats->count()
            ]);

        $brands = $productsWithBrand
            ->map(fn(Product $product) => $product->brand)
            ->filter(fn(Brand|null $brand) => $brand !== null)
            ->groupBy("id")
            ->map(fn(Collection $brandCollection) => [
                "brand" => $brandCollection[0],
                "count" => $brandCollection->count()
            ]);

        $highlights = $products->getCollection()->mapWithKeys(fn (Hit $hit) => [$hit->document()->id() => $hit->highlight()->raw()]);

        return [
            'products' => $products,
            'suggestions' => self::suggestions($term),
            'categories' => $categories,
            'highlights' => $highlights,
            'brands' => $brands
        ];
    }

    private static function combineQueries(QueryBuilderInterface ...$queries)
    {
        $compoundQuery = Query::bool()->minimumShouldMatch(1);
        foreach ($queries as $query)
            $compoundQuery->should($query);
        return $compoundQuery;
    }

    private static function finalizeQuery(BoolQueryBuilder $query)
    {
        $finalQuery = Query::bool()->must($query);

        if (request()->has('min_price') || request()->has('max_price'))
            $finalQuery->must(self::priceFilter(
                request()->input('min_price'),
                request()->input('max_price')
            ));

        return $finalQuery;
    }

    public static function query(string $term, $sortBy = null): array
    {
        $term = str_replace(['ö', 'ç', 'ş', 'ü', 'ğ', 'İ', 'ı', 'Ö', 'Ç', 'Ş', 'Ü', 'G'], ['o', 'c', 's', 'u', 'g', 'I', 'i', 'O', 'C', 'S', 'U', 'G'], trim($term));
        $regex = '/[^a-zA-Z0-9]+/';
        $cleanTerm = strtolower(preg_replace($regex, '', $term));

        if (empty($term))
            return [
                'products' => [],
                'suggestions' => [],
                'categories' => [],
                'highlights' => []
            ];

        $oemQuery = self::oemQuery($cleanTerm);
        $carQuery = self::carQuery($term);
        $productQuery = self::productQuery($cleanTerm);

        $compoundQuery = self::combineQueries($productQuery, $oemQuery, $carQuery);
        $compoundQueryWithoutBrandFilter = self::combineQueries($productQuery, $oemQuery, $carQuery);

        if (request()->has('brands')) $compoundQuery->filter(self::brandFilter(request()->input('brands')));

        $finalQuery = self::finalizeQuery($compoundQuery);
        $compoundQueryWithoutBrandFilter = self::finalizeQuery($compoundQueryWithoutBrandFilter);

        return self::results($finalQuery, $compoundQueryWithoutBrandFilter, $sortBy, $term);
    }
}
