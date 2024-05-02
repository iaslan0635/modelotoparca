<?php

namespace App\Models\Ocp;

class Product extends BaseModel
{
    public function searchResult()
    {
        return $this->belongsToMany(SearchResult::class)->using(SearchResultProduct::class);
    }
}
