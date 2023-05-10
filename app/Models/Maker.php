<?php

namespace App\Models;

class Maker extends BaseModel
{
    public $timestamps = false;

    function cars()
    {
        return $this->hasMany(Car::class);
    }
}
