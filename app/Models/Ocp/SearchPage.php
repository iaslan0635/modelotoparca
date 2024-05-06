<?php

namespace App\Models\Ocp;

use App\Packages\Fuzz;
use Illuminate\Database\Eloquent\Model;

class SearchPage extends Model
{
    public $timestamps = false;

    protected $casts = [
        'brands' => 'array',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->using(SearchPageProduct::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class)->using(ProductPageBrand::class);
    }

    public function getBrandId(string $brandName): ?int
    {
        return $this->brands->first(fn($brand) => Fuzz::isEqual($brand->name, $brandName))?->id;
    }
}
