<?php

namespace App\Models;

use App\Services\MarketPlace;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function reasons(): Attribute
    {
        return Attribute::get(fn() => MarketPlace::createTrackableMerchant($this->merchant)->parseTrackingErrors($this->result));
    }
}
