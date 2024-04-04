<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderItem extends BaseModel
{
    protected $casts = [
        'product_data' => 'array',
        'price_data' => 'array',
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    protected function formattedPrice(): Attribute
    {
        return Attribute::get(fn () => number_format($this->price, 2).' ₺');
    }

    protected function formattedTotalPrice(): Attribute
    {
        return Attribute::get(fn () => number_format($this->price * $this->quantity, 2).' ₺');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
