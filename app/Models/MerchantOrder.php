<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantOrder extends Model
{
    protected $casts = [
        'client' => 'array',
        'data' => 'array',
        'date' => 'datetime',
        'lines' => 'array',
        'line_data' => 'array',
    ];
}
