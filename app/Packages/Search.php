<?php

namespace App\Packages;

use App\Models\Product;
use App\Models\ProductOem;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Support\Collection;

class Search
{
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

        $oemQuery = Query::nested()
            ->path('oems')
            ->query(Query::match()->field('oems.oem')->query($cleanTerm));

        $carQuery = Query::nested()
            ->path('cars')
            ->query(Query::match()->field('cars.regex_name')->query(preg_replace('/[^\w\s]/', '', $term)));

        $productQuery = Query::multiMatch()
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

        $oemSuggestQuery = Query::bool()
            ->should(Query::prefix()->field('oem')->value($term)->caseInsensitive(true));

        $suggestionOems = ProductOem::searchQuery($oemSuggestQuery)->highlight('oem', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->execute();

        $suggestions = [];

        foreach ($suggestionOems->highlights() as $highlight) {
            foreach ($highlight->raw()["oem"] as $item) {
                $suggestions[] = $item;
            }
        }

        $esQuery = Query::bool()->minimumShouldMatch(1);
        $esQuery->should($productQuery);
        $esQuery->should($oemQuery);
        $esQuery->should($carQuery);

        if (request()->has('brands')) {
            $brandQuery = Query::nested()
                ->path('brand')
                ->query(Query::terms()->field('brand.id')->values([1606]));
            $esQuery->filter($brandQuery);
        }

        $boolQuery = Query::bool();
        $boolQuery->must($esQuery);

        /*$priceQuery = Query::range()
            ->field('price')
            ->gte(50)
            ->lte(75);

        $boolQuery->must($priceQuery);*/
        $products = Product::searchQuery($boolQuery)
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
            $products->sort('price', 'asc');
        } elseif ($sortBy === 'price-desc') {
            $products->sort('price', 'desc');
        }

        $products = $products->paginate(12);
        dd($products);

        $productCategories = Product::searchQuery($boolQuery)
            ->load(['categories'])
            ->paginate(max($products->total(), 1));

        $categories = $productCategories->models()
            ->map(fn(Product $product) => $product->categories)->flatten()
            ->groupBy("id")->filter(fn(Collection $cats) => count($cats))
            ->map(fn(Collection $cats) => [
                "category" => $cats[0],
                "count" => $cats->count()
            ]);

        $highlights = [];

        foreach ($products as $product) {
            foreach ($product->highlight()->raw() as $key => $item) {
                $highlights[$product->document()->id()][$key] = $item;
            }
        }

        return [
            'products' => $products,
            'suggestions' => $suggestions,
            'categories' => $categories,
            'highlights' => $highlights
        ];
    }
}
