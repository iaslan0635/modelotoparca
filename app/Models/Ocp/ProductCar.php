<?php

namespace App\Models\Ocp;

class ProductCar extends BaseModel
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
