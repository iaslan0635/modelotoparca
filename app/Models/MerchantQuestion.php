<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantQuestion extends Model
{
    protected $casts = [
        'date' => 'datetime',
        'conversation' => 'array',
        'data' => 'array',
    ];
}
