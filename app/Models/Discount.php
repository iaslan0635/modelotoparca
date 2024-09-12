<?php

namespace App\Models;

class Discount extends BaseModel
{
    protected $casts = [
        'data' => 'array',
        'starts_at' => 'timestamp',
        'ends_at' => 'timestamp',
    ];
}
