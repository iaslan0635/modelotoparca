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
    const BOOST = [
        "cross_code" => 7,
        "producercode" => 6,
        "similar_product_codes" => 5,
        "oem" => 4,
        "title" => 3,
        "car" => 1
    ];

    private static function carQuery(string $term)
    {
        return Query::nested()
            ->path('cars')
            ->query(Query::match()->field('cars.regex_name')->query(preg_replace('/[^\w\s]/', '', $term))
                ->boost(self::BOOST["car"]));
    }

    private static function oemQuery(string $term)
    {
        return Query::nested()
            ->path('oems')
            ->query(Query::term()->field('oems.oem')->value($term)
                ->boost(self::BOOST["oem"]));
    }

    private static function oemRegexQuery(string $cleanTerm)
    {
        return Query::nested()
            ->path('oems')
            ->query(Query::term()->field('oems.oem')->value($cleanTerm)
                ->boost(self::BOOST["oem"]));
    }

    private static function similarQuery(string $term)
    {
        return Query::nested()
            ->path('similar_product_codes')
            ->query(Query::term()->field('similar_product_codes.code')->value($term)
                ->boost(self::BOOST["similar_product_codes"]));
    }

    private static function similarRegexQuery(string $cleanTerm)
    {
        return Query::nested()
            ->path('similar_product_codes')
            ->query(Query::term()->field('similar_product_codes.code_regex')->value($cleanTerm)
                ->boost(self::BOOST["similar_product_codes"]));
    }

    private static function productQuery(string $term)
    {
        return Query::multiMatch()
            ->fields([
                'title',
                'sub_title',
            ])
            ->query($term)
            ->fuzziness('AUTO')
            ->boost(self::BOOST["title"]);
    }

    private static function crossQuery(string $term)
    {
        return Query::term()
            ->field('cross_code')
            ->value($term)
            ->boost(self::BOOST["cross_code"]);
    }

    private static function crossRegexQuery(string $cleanTerm)
    {
        return Query::term()
            ->field('cross_code_regex')
            ->value($cleanTerm)->caseInsensitive(true)
            ->boost(self::BOOST["cross_code"]);
    }

    private static function producerQuery(string $term)
    {
        return Query::term()
            ->field('producercode')
            ->value($term)
            ->boost(self::BOOST["producercode"]);
    }

    private static function producerRegexQuery(string $cleanTerm)
    {
        return Query::term()
            ->field('producercode_regex')
            ->value($cleanTerm)->caseInsensitive(true)
            ->boost(self::BOOST["producercode"]);
    }

    private static function producer2Query(string $term)
    {
        return Query::term()
            ->field('producercode2')
            ->value($term)
            ->boost(self::BOOST["producercode"]);
    }

    private static function producer2RegexQuery(string $cleanTerm)
    {
        return Query::term()
            ->field('producercode2_regex')
            ->value($cleanTerm)->caseInsensitive(true)
            ->boost(self::BOOST["producercode"]);
    }

    private static function suggestionsOem(string $term)
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
                if (!in_array($item, $suggestions))
                    $suggestions[] = $item;

        return $suggestions;
    }

    private static function suggestionsCrossCode(string $term)
    {
        $suggestQuery = Query::bool()
            ->should(Query::prefix()->field('cross_code')->value($term)->caseInsensitive(true))
            ->should(Query::prefix()->field('cross_code_regex')->value($term)->caseInsensitive(true));

        $suggestion = Product::searchQuery($suggestQuery)->highlight('cross_code', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->highlight('cross_code_regex', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->execute();

        $suggestions = [];
        foreach ($suggestion->highlights() as $highlight) {
            if (isset($highlight->raw()["cross_code"])) {
                foreach ($highlight->raw()["cross_code"] as $item)
                    if (!in_array($item, $suggestions))
                        $suggestions[] = $item;
            }
            if (isset($highlight->raw()["cross_code_regex"])) {
                foreach ($highlight->raw()["cross_code_regex"] as $item)
                    if (!in_array($item, $suggestions))
                        $suggestions[] = $item;
            }
        }

        return $suggestions;
    }

    private static function suggestionsProducerCode(string $term)
    {
        $suggestQuery = Query::bool()
            ->should(Query::prefix()->field('producercode')->value($term)->caseInsensitive(true))
            ->should(Query::prefix()->field('producercode_regex')->value($term)->caseInsensitive(true));

        $suggestion = Product::searchQuery($suggestQuery)->highlight('producercode', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->highlight('producercode_regex', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->execute();

        $suggestions = [];
        foreach ($suggestion->highlights() as $highlight) {
            if (isset($highlight->raw()["producercode"]))
                foreach ($highlight->raw()["producercode"] as $item)
                    if (!in_array($item, $suggestions))
                        $suggestions[] = $item;
            if (isset($highlight->raw()["producercode_regex"]))
                foreach ($highlight->raw()["producercode_regex"] as $item)
                    if (!in_array($item, $suggestions))
                        $suggestions[] = $item;
        }

        return $suggestions;
    }

    private static function suggestionsProducerCode2(string $term)
    {
        $suggestQuery = Query::bool()
            ->should(Query::prefix()->field('producercode2')->value($term)->caseInsensitive(true))
            ->should(Query::prefix()->field('producercode2_regex')->value($term)->caseInsensitive(true));

        $suggestion = Product::searchQuery($suggestQuery)->highlight('producercode2', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->highlight('producercode2_regex', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->execute();

        $suggestions = [];
        foreach ($suggestion->highlights() as $highlight) {
            if (isset($highlight->raw()["producercode2"]))
                foreach ($highlight->raw()["producercode2"] as $item)
                    if (!in_array($item, $suggestions))
                        $suggestions[] = $item;
            if (isset($highlight->raw()["producercode2_regex"]))
                foreach ($highlight->raw()["producercode2_regex"] as $item)
                    if (!in_array($item, $suggestions))
                        $suggestions[] = $item;
        }

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
            ->highlight('cross_code_regex')
            ->highlight('producercode_regex')
            ->highlight('producercode2_regex')
            ->highlight('similar_product_codes')
            ->highlight('oems.oem')
            ->highlight('cars.name')
            ->highlight('cars.regex_name')
            ->highlight('similar_product_codes.code')
            ->highlight('similar_product_codes.code_regex');

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
            ->load(['categories'])->size(10)->execute()->models();

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

        $highlights = $products->getCollection()->mapWithKeys(fn(Hit $hit) => [$hit->document()->id() => $hit->highlight()->raw()]);

        return [
            'products' => $products,
            'suggestions' => [
                'oems' => self::suggestionsOem($term),
                'cross_codes' => self::suggestionsCrossCode($term),
                'producercodes' => self::suggestionsProducerCode($term),
                'producercodes2' => self::suggestionsProducerCode2($term)
            ],
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

        $oemQuery = self::oemQuery($term);
        $oemRegexQuery = self::oemRegexQuery($cleanTerm);
        //$similarQuery = self::similarQuery($term);
        //$similarRegexQuery = self::similarRegexQuery($cleanTerm);
        $carQuery = self::carQuery($term);
        $productQuery = self::productQuery($term);
        $crossQuery = self::crossQuery($term);
        $crossRegexQuery = self::crossRegexQuery($cleanTerm);
        $producerQuery = self::producerQuery($term);
        $producerRegexQuery = self::producerRegexQuery($cleanTerm);
        $producer2Query = self::producer2Query($term);
        $producer2RegexQuery = self::producer2RegexQuery($cleanTerm);

        $compoundQuery = self::combineQueries($productQuery, $oemQuery, $oemRegexQuery, /*$similarQuery, $similarRegexQuery,*/ $carQuery, $crossQuery, $crossRegexQuery, $producerQuery, $producerRegexQuery, $producer2Query, $producer2RegexQuery);
        $compoundQueryWithoutBrandFilter = self::combineQueries($productQuery, $oemQuery, $oemRegexQuery, /*$similarQuery, $similarRegexQuery,*/ $carQuery, $crossQuery, $crossRegexQuery, $producerQuery, $producerRegexQuery, $producer2Query, $producer2RegexQuery);

        if (request()->has('brands')) $compoundQuery->filter(self::brandFilter(request()->input('brands')));

        $finalQuery = self::finalizeQuery($compoundQuery);
        $compoundQueryWithoutBrandFilter = self::finalizeQuery($compoundQueryWithoutBrandFilter);

        return self::results($finalQuery, $compoundQueryWithoutBrandFilter, $sortBy, $term);
    }
}
