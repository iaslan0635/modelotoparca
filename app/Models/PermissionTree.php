<?php

namespace App\Models;


class PermissionTree extends BaseModel
{
    protected $casts = [
        "tree" => "array",
    ];

    public $timestamps = false;
}
