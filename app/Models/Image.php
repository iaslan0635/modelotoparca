<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Image extends BaseModel
{
    protected function url(): Attribute
    {
        return Attribute::get(fn () => Storage::url($this->path));
    }
}
