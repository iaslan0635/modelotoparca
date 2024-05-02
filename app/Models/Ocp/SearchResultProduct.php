<?php

namespace App\Models\Ocp;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SearchResultProduct extends Pivot
{
    public $timestamps = false;
    protected $connection = 'bigdata';

    public function searchResult(): BelongsTo
    {
        return $this->belongsTo(SearchResult::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
