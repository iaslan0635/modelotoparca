<?php

namespace App\Models\Ocp;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SearchPageProduct extends BaseModel
{
    public $timestamps = false;
    protected $connection = 'bigdata';
    protected $primaryKey = ['search_page_id', 'url'];

    public function searchPage(): BelongsTo
    {
        return $this->belongsTo(SearchPage::class);
    }
}
