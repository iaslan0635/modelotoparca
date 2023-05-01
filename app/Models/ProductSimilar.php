<?php

namespace App\Models;

use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductSimilar extends BaseModel
{
    public $timestamps = false;

    use Searchable;

    protected $searchableAs = 'product_similars_index';

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    public function toSearchableArray()
    {
        return $this->only([
            'id',
            'product_id',
            'code',
        ]);
    }

    public function product(): BelongsTo
    {
        $this->belongsTo(Product::class);
    }
}
