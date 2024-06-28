<?php

namespace App\Models\Ocp;

class SearchAjax extends BaseModel
{
    public $timestamps = false;

    protected $casts = [
        "fetched_products" => "collection",
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, "search_ajax_products");
    }
}
