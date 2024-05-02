<?php

namespace App\Models\Ocp;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SearchPageProduct extends Pivot
{
    public $timestamps = false;
    protected $connection = 'bigdata';

    public function searchPage(): BelongsTo
    {
        return $this->belongsTo(SearchPage::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
