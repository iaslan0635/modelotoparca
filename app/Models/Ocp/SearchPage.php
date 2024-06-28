<?php

namespace App\Models\Ocp;

use App\Packages\Fuzz;

class SearchPage extends BaseModel
{
    public $timestamps = false;

    protected $casts = [
        'brands' => 'array',
        'categories' => 'array',
    ];

    public function products()
    {
        return $this->hasMany(SearchPageProduct::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, "search_page_brands")->using(ProductPageBrand::class);
    }

    public function getBrandId(string $brandName): ?int
    {
        return $this->brands()->get()->first(fn($brand) => Fuzz::isEqual($brand->name, $brandName))?->id;
    }
}
