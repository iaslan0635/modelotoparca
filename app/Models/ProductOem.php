<?php

namespace App\Models;

use Elastic\ScoutDriverPlus\Searchable;

class ProductOem extends BaseModel
{
    public $timestamps = false;

    use Searchable;

    protected $searchableAs = 'product_oems_index';

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'logicalref' => $this->logicalref,
            'oem' => $this->oem,
            'oem_regex' => strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $this->oem)),
        ];
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'logicalref');
    }
}
