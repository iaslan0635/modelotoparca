<?php

namespace App\Models\Ocp;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductPageBrand extends Pivot
{
    public $timestamps = false;

    protected $connection = 'bigdata';

    public function searchPage(): BelongsTo
    {
        return $this->belongsTo(SearchPage::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
