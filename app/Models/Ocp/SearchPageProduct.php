<?php

namespace App\Models\Ocp;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SearchPageProduct extends BaseModel
{
    public $timestamps = false;
    protected $connection = 'bigdata';

    public function searchPage(): BelongsTo
    {
        return $this->belongsTo(SearchPage::class);
    }
}
