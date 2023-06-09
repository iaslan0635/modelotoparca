<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Image extends BaseModel
{
    protected function url(): Attribute
    {
        return Attribute::get(function () {
            return asset("storage/$this->path");
        });
    }
}
