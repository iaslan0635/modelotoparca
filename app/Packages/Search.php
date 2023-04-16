<?php

namespace App\Packages;

use App\Models\Car;
use App\Models\Product;
use App\Models\ProductOem;
use Elastic\ScoutDriverPlus\Decorators\Hit;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Database\Eloquent\Builder;

class Search
{
    public static function query(string $query): array
    {
        $term = "product";
        $queryCar = Query::match()
            ->field('name')
            ->query($query)
            ->fuzziness('1');

        $resultCars = Car::searchQuery($queryCar)->paginate(500);
        $carids = $resultCars->documents()->map(fn($d) => $d->id())->toArray();

        $queryOem = Query::match()
            ->field('oem')
            ->query($query)
            ->fuzziness('1');

        $resultOems = ProductOem::searchQuery($queryOem)->paginate(500);
        $oemids = $resultOems->hits()->map(fn($hit) => $hit->document()->content('logicalref'))->filter()->toArray();
        $oemids = array_unique($oemids);

        if (count($oemids) > 0){
            $term = "oem";
        }

        $query = Query::multiMatch()
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

        $results = Product::searchQuery($query)
            ->highlightRaw([
                'fields' => [
                    "title" => new \stdClass(),
                    "sub_title" => new \stdClass(),
                    "cross_code" => new \stdClass(),
                    "producercode" => new \stdClass(),
                    "producercode2" => new \stdClass(),
                    "similar_product_codes" => new \stdClass(),
                ]
            ])
            ->execute()->hits()->sortBy(fn(Hit $hit) => $hit->score(), descending: true);
            //->map(fn(Hit $hit) => $hit->document()->id());

        $highlights = [];

        foreach ($results as $result){
//            dd($result->highlight()->raw());
            $highlights[$result->document()->id()] = $result->highlight()->raw();
        }

        $results = $results->map(fn(Hit $hit) => $hit->document()->id());

        return [
            'query' => Product::query()
            ->with(['category', 'price', 'brand'])
            ->orWhereIn('id', $results)
            ->orWhereRelation('oems', fn($q) => $q->whereIn('logicalref', $oemids))
            ->orWhereRelation('cars', fn($q) => $q->whereIn('id', $carids)),
            'term' => $term,
            'highlights' => $highlights
        ];
    }
}
