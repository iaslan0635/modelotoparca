<?php

namespace App\Models;

use Elastic\ScoutDriverPlus\Searchable;

class ProductOem extends BaseModel
{
    public $timestamps = false;
    use Searchable;

    protected $searchableAs = "product_oems_index";

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    public function toSearchableArray()
    {
        return $this->only([
            'id',
            'logicalref',
            'oem'
        ]);
    }
}
