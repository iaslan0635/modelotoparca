<?php

namespace App\Models\Ocp;

class Product extends BaseModel
{
    protected $casts = [
        'specifications' => 'array',
        'tecdoc' => 'array',
        'images' => 'array',
    ];

    public function oems()
    {
        return $this->hasMany(ProductOem::class);
    }

    public function cars()
    {
        return $this->hasMany(ProductCar::class);
    }
}
