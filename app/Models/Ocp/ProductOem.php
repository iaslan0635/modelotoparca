<?php

namespace App\Models\Ocp;

class ProductOem extends BaseModel
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
