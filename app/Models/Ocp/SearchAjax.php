<?php

namespace App\Models\Ocp;

class SearchAjax extends BaseModel
{
    public $timestamps = false;


    public function products()
    {
        return $this->belongsToMany(Product::class, "search_ajax_products")->using(SearchPageProduct::class);
    }
}
