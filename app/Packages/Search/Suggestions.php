<?php

namespace App\Packages\Search;

use App\Models\Product;
use App\Models\ProductOem;
use Elastic\ScoutDriverPlus\Support\Query;

/** @TODO Add index_prefixes option to mapping parameters */
class Suggestions
{
    public function __construct(public readonly string $term)
    {
    }

    public function oem()
    {
        $query = Query::prefix()->field('oems')->value($this->term)->caseInsensitive(true);
        return ProductOem::searchQuery($query)->execute()->models()->pluck('oem')
            ->unique()->map(fn(string $s) => "<strong>$s</strong>")->all();
    }

    public function crossCode()
    {
        return $this->suggestFromProductModel('cross_code');
    }

    public function producerCode()
    {
        return $this->suggestFromProductModel('producercode');
    }

    public function producerCode2()
    {
        return $this->suggestFromProductModel('producercode2');
    }

    private function suggestFromProductModel(string $field)
    {
        $query = Query::prefix()->field($field)->value($this->term)->caseInsensitive(true);

        $suggestion = Product::searchQuery($query)->highlight($field, [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->highlight('cross_code_regex', [
            'pre_tags' => ['<strong>'],
            'post_tags' => ['</strong>'],
        ])->execute();

        $suggestions = [];
        foreach ($suggestion->highlights() as $highlight) {
            if (isset($highlight->raw()[$field])) {
                foreach ($highlight->raw()[$field] as $item) {
                    if (!in_array($item, $suggestions)) {
                        $suggestions[] = $item;
                    }
                }
            }
        }

        return $suggestions;
    }
}
