<?php

namespace App\Models\Ocp;

class Product extends BaseModel
{
    public function searchResult()
    {
        return $this->belongsToMany(SearchPage::class)->using(SearchPageProduct::class);
    }
}
