<?php

namespace App\Packages;

use App\Models\Car;
use App\Models\Product;
use App\Models\ProductOem;
use Elastic\ScoutDriverPlus\Builders\BoolQueryBuilder;
use Elastic\ScoutDriverPlus\Decorators\Hit;
use Elastic\ScoutDriverPlus\Support\Query;

class Search
{
    public static function query(string $query): array
    {
        $query = str_replace(['ö', 'ç', 'ş', 'ü', 'ğ', 'İ', 'ı', 'Ö', 'Ç', 'Ş', 'Ü', 'G'], ['o', 'c', 's', 'u', 'g', 'I', 'i', 'O', 'C', 'S', 'U', 'G'], trim($query));
        $regex = '/[^a-zA-Z0-9]+/';

        $oemQuery = Query::nested()
            ->path('oems')
            ->query(Query::match()->field('oems.oem')->query($query));

        $carQuery = Query::nested()
            ->path('cars')
            ->query(Query::match()->field('cars.name')->query($query));

        $productQuery = Query::multiMatch()
            ->fields([
                'title',
                'sub_title',
                'cross_code',
                'producercode',
                'producercode2',
                'similar_product_codes',
            ])
            ->query($query)
            ->fuzziness('AUTO');

        $oemSuggestQuery = Query::bool()
            ->should(Query::prefix()->field('oem')->value(strtolower(preg_replace($regex, '', $query)))->caseInsensitive(true));

        $suggestionOems = ProductOem::searchQuery($oemSuggestQuery)->highlight('oem', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->execute();

        $suggestions = [];

        foreach ($suggestionOems->highlights() as $highlight){
            foreach ($highlight->raw()["oem"] as $item){
                $suggestions[] = $item;
            }
        }

//        dd($suggestions);

        $boolQuery = Query::bool();
        $boolQuery->should($productQuery);
        $boolQuery->should($oemQuery);
        $boolQuery->should($carQuery);
        $products = Product::searchQuery($boolQuery)
            ->highlight('title')
            ->highlight('sub_title')
            ->highlight('cross_code')
            ->highlight('producercode')
            ->highlight('producercode2')
            ->highlight('similar_product_codes')
            ->highlight('oems.oem')
            ->highlight('cars.name')
            ->paginate(12);

        $productCategories = Product::searchQuery($boolQuery)
            ->load(['categories'])
            ->paginate($products->total());

        $categories = [];
        $highlights = [];

        foreach ($products as $product){
            foreach ($product->highlight()->raw() as $key => $item){
                $highlights[$product->document()->id()][$key] = $item;
            }
        }

//        dd($highlights);

        foreach ($productCategories->models() as $model){
            foreach ($model->categories as $category){
                $categories[$category->id] = $category;
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
