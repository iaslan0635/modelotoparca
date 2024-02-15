<?php

namespace App\Models;


class PermissionTree extends BaseModel
{
    protected $casts = [
        "tree" => "array",
    ];

    public $timestamps = false;

    public function model()
    {
        return $this->morphTo("model");
    }
}
