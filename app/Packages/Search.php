<?php

namespace App\Packages;

use App\Models\Car;
use App\Models\Product;
use App\Models\ProductOem;
use Elastic\ScoutDriverPlus\Decorators\Hit;
use Elastic\ScoutDriverPlus\Support\Query;

class Search
{
    public static function query(string $query): array
    {
        $query = str_replace(['ö', 'ç', 'ş', 'ü', 'ğ', 'İ', 'ı', 'Ö', 'Ç', 'Ş', 'Ü', 'G'], ['o', 'c', 's', 'u', 'g', 'I', 'i', 'O', 'C', 'S', 'U', 'G'], trim($query));

        $term = "product";
        $carQuery = Query::match()
            ->field('name')
            ->query($query)
            ->fuzziness('1');

        $productQuery = Query::multiMatch()
            ->fields([
                "title",
                "sub_title",
                "cross_code",
                "producercode",
                "producercode2",
                "similar_product_codes",
            ])
            ->query($query)
            ->fuzziness('AUTO');

        $oemQuery = Query::match()
            ->field('oem')
            ->query($query)
            ->fuzziness('1');



        $resultCars = Car::searchQuery($carQuery)->paginate(500);
        $carIds = $resultCars->documents()->map(fn($d) => $d->id())->toArray();



        $resultOems = ProductOem::searchQuery($oemQuery)->collapse("logicalref")->paginate(10);
        dd($resultOems);

        if (count($resultOems->models()) > 0) {
            $term = "oem"; // FIXME: Oemlerden bulunanlar olsa bile sonuçlar diğer bulunanlarla birlikte geliyor.
        }


        $highlightsOptions = [
            "pre_tags" => [""],
            "post_tags" => [""]
        ];

        $results = Product::searchQuery($productQuery)
            ->highlight("title", $highlightsOptions)
            ->highlight("sub_title", $highlightsOptions)
            ->highlight("cross_code", $highlightsOptions)
            ->highlight("producercode", $highlightsOptions)
            ->highlight("producercode2", $highlightsOptions)
            ->highlight("similar_product_codes", $highlightsOptions)
            ->execute()->hits()->sortBy(fn(Hit $hit) => $hit->score(), descending: true);
        //->map(fn(Hit $hit) => $hit->document()->id());

        $highlights = [];

        foreach ($results as $result) {
//            dd($result->highlight()->raw());
            $highlights[$result->document()->id()] = $result->highlight()->raw();
        }

        $results = $results->map(fn(Hit $hit) => $hit->document()->id());

        return [
            'query' => Product::query()
                ->with(['category', 'price', 'brand'])
                ->orWhereIn('id', $results)
                ->orWhereRelation('oems', fn($q) => $q->whereIn('logicalref', $oemIds))
                ->orWhereRelation('cars', fn($q) => $q->whereIn('id', $carIds)),
            'term' => $term,
            'highlights' => $highlights
        ];
    }
}
