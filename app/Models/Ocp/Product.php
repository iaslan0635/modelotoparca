<?php

namespace App\Models\Ocp;

class Product extends BaseModel
{
    protected $casts = [
        "specifications" => "array",
        "tecdoc" => "array",
        "images" => "array",
    ];

    public function searchPage()
    {
        return $this->belongsToMany(SearchPage::class)->using(SearchPageProduct::class);
    }

    public function oems()
    {
        return $this->hasMany(ProductOem::class);
    }

    public function cars()
    {
        return $this->hasMany(ProductCar::class);
    }
}
