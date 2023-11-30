<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class Tracking extends BaseModel
{
    protected $casts = [
        "success" => "boolean",
        "result" => "json",
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
