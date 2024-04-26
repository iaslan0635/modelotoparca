<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends BaseModel
{
    protected function url(): Attribute
    {
        return Attribute::get(fn() => asset("storage/$this->path"));
    }

    protected function absolutePath(): Attribute
    {
        return Attribute::get(fn() => storage_path(app()->joinPaths("app", $this->path)));
    }
}
