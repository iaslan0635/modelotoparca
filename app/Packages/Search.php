<?php

namespace App\Packages;

use App\Facades\Garage;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductOem;
use Elastic\ScoutDriverPlus\Builders\BoolQueryBuilder;
use Elastic\ScoutDriverPlus\Builders\QueryBuilderInterface;
use Elastic\ScoutDriverPlus\Decorators\Hit;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class Search
{
    const BOOST = [
        "producercode_unbranded" => 16,
        "cross_code" => 14,
        "producercode" => 12,
        "similar_product_codes" => 10,
        "oem" => 8,
        "title" => 6,
        "car" => 1
    ];

    private static function carQuery(string $term)
    {
        return Query::nested()
            ->path('cars')
            ->query(Query::match()->field('cars.regex_name')->operator("AND")->query(preg_replace('/[^\w\s]/', '', $term))
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
            ->query(Query::term()->field('oems.oem_regex')->value($cleanTerm)
                ->boost(self::BOOST["oem"]));
    }

    private static function similarQuery(string $term)
    {
        return Query::nested()
            ->path('similars')
            ->query(Query::term()->field('similars.code')->value($term)
                ->boost(self::BOOST["similar_product_codes"]));
    }

    private static function similarRegexQuery(string $cleanTerm)
    {
        return Query::nested()
            ->path('similars')
            ->query(Query::term()->field('similars.code_regex')->value($cleanTerm)
                ->boost(self::BOOST["similar_product_codes"]));
    }

    private static function productQuery(string $term)
    {
        $query = Query::bool();
        $words = explode(" ", $term);
        foreach ($words as $word) {
            $query->must(Query::prefix()->field('full_text')->value($word)->caseInsensitive(true));
        }

        return $query;
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

    private static function producerUnbrandedQuery(string $term)
    {
        return Query::term()
            ->field('producercode_unbranded')
            ->value($term)
            ->boost(self::BOOST["producercode_unbranded"]);
    }

    private static function producerUnbrandedRegexQuery(string $cleanTerm)
    {
        return Query::term()
            ->field('producercode_unbranded_regex')
            ->value($cleanTerm)->caseInsensitive(true)
            ->boost(self::BOOST["producercode_unbranded"]);
    }

    private static function suggestionsOem(string $cleanTerm)
    {
        $oemSuggestQuery = Query::bool()
            ->should(Query::prefix()->field('oem_regex')->value($cleanTerm)->caseInsensitive(true));

        $suggestionOems = ProductOem::searchQuery($oemSuggestQuery)->execute();
        return $suggestionOems->models()->pluck("oem")->unique()->map(fn(string $s) => "<strong>$s</strong>")->all();
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
            ->highlight('producercode_unbranded')
            ->highlight('producercode_unbranded_regex')
            ->highlight('producercode2_regex')
            ->highlight('similar_product_codes')
            ->highlight('oems.oem')
            ->highlight('oems.oem_regex')
            ->highlight('cars.name')
            ->highlight('full_text')
            ->highlight('cars.regex_name')
            ->highlight('similars.code')
            ->highlight('similars.code_regex');

        if ($sortBy === 'price-asc') {
            $products->sort('price');
        } elseif ($sortBy === 'price-desc') {
            $products->sort('price', 'desc');
        }

        return $products->paginate(12);
    }

    private static function results(BoolQueryBuilder $finalQuery, BoolQueryBuilder $finalQueryWithoutBrandFilter, string|null $sortBy, string $term, string $cleanTerm)
    {
        $products = self::paginateProducts($finalQuery, $sortBy);

        $productsWithCategories = Product::searchQuery($finalQuery)
            ->refineModels(fn(Builder $q) => $q->select(["id"]))
            ->load(['categories'])->size(100)->execute()->models();

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

        self::log($term);
        return [
            'products' => $products,
            'suggestions' => [
                'oems' => self::suggestionsOem($cleanTerm),
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

    private static function finalizeQuery(BoolQueryBuilder $query, $selectCategory)
    {
        $finalQuery = Query::bool()->must($query);

        if (request()->has('min_price') || request()->has('max_price'))
            $finalQuery->must(self::priceFilter(
                request()->input('min_price'),
                request()->input('max_price')
            ));

        if (Garage::chosen())
            $finalQuery->must(self::carFilter(Garage::chosen()));

        if ($selectCategory)
            $finalQuery->must(self::categoryFilter($selectCategory));

        return $finalQuery;
    }

    private static function carFilter(int $id)
    {
        return Query::nested()->path("cars")
            ->query(
                Query::term()
                    ->field("cars.id")
                    ->value($id)
            );
    }

    private static function categoryFilter(int $id)
    {
        return Query::nested()->path("categories")
            ->query(
                Query::term()
                    ->field("categories.id")
                    ->value($id)
            );
    }

    public static function query(string|null $term, $sortBy = null, int|null $selectCategory = null): array
    {
        $term = str_replace(['ö', 'ç', 'ş', 'ü', 'ğ', 'İ', 'ı', 'Ö', 'Ç', 'Ş', 'Ü', 'Ğ'], ['o', 'c', 's', 'u', 'g', 'I', 'i', 'O', 'C', 'S', 'U', 'G'], trim($term));
        $regex = '/[^a-zA-Z0-9]+/';
        $cleanTerm = strtolower(preg_replace($regex, '', $term));
        //dd($term);
        if (empty($term))
            return [
                'products' => new LengthAwarePaginator([], 0, 1, 0),
                'suggestions' => collect(),
                'categories' => collect(),
                'highlights' => collect(),
                'brands' => collect()
            ];

        $oemQuery = self::oemQuery($term);
        $oemRegexQuery = self::oemRegexQuery($cleanTerm);
        $similarQuery = self::similarQuery($term);
        $similarRegexQuery = self::similarRegexQuery($cleanTerm);
        $carQuery = self::carQuery($term);
        $productQuery = self::productQuery($term);
        $crossQuery = self::crossQuery($term);
        $crossRegexQuery = self::crossRegexQuery($cleanTerm);
        $producerQuery = self::producerQuery($term);
        $producerRegexQuery = self::producerRegexQuery($cleanTerm);
        $producer2Query = self::producer2Query($term);
        $producer2RegexQuery = self::producer2RegexQuery($cleanTerm);
        $producerUnbrandedQuery = self::producerUnbrandedQuery($term);
        $producerUnbrandedRegexQuery = self::producerUnbrandedRegexQuery($cleanTerm);

        $foundCodes = self::combineQueries($oemQuery, $oemRegexQuery, $similarQuery, $similarRegexQuery, $crossQuery, $crossRegexQuery, $producerQuery, $producerUnbrandedQuery, $producerUnbrandedRegexQuery, $producerRegexQuery, $producer2Query, $producer2RegexQuery);
        $finalFoundCodes = self::finalizeQuery($foundCodes, $selectCategory);

        $ifCodes = self::paginateProducts($finalFoundCodes, $sortBy)->total();

        if ($ifCodes > 0) {
            $compoundQuery = self::combineQueries($oemQuery, $oemRegexQuery, $similarQuery, $similarRegexQuery, $crossQuery, $crossRegexQuery, $producerQuery, $producerUnbrandedQuery, $producerUnbrandedRegexQuery, $producerRegexQuery, $producer2Query, $producer2RegexQuery);
            $compoundQueryWithoutBrandFilter = self::combineQueries($oemQuery, $oemRegexQuery, $similarQuery, $similarRegexQuery, $crossQuery, $crossRegexQuery, $producerQuery, $producerUnbrandedQuery, $producerUnbrandedRegexQuery, $producerRegexQuery, $producer2Query, $producer2RegexQuery);
        } else {
            $compoundQuery = self::combineQueries($productQuery, $carQuery);
            $compoundQueryWithoutBrandFilter = self::combineQueries($productQuery, $carQuery);
        }
        if (request()->has('brands')) $compoundQuery->filter(self::brandFilter(request()->input('brands')));
        $finalQuery = self::finalizeQuery($compoundQuery, $selectCategory);
        $compoundQueryWithoutBrandFilter = self::finalizeQuery($compoundQueryWithoutBrandFilter, $selectCategory);


        return self::results($finalQuery, $compoundQueryWithoutBrandFilter, $sortBy, $term, $cleanTerm);
    }

    protected static function log(string $query): void
    {
        \App\Models\Search::create([
            "query" => $query,
            "user_id" => \auth()->id()
        ]);
    }
}
