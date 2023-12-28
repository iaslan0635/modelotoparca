<?php

namespace App\Models;

class BotProduct extends BaseModel
{
    protected $casts = [
        'is_banned' => 'boolean',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
