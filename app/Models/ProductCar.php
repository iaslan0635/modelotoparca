<?php

namespace App\Models;

class ProductCar extends BaseModel
{
    public $timestamps = false;

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
