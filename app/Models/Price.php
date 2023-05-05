<?php

namespace App\Models;

use App\Facades\ExchangeRate;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Price extends BaseModel
{
    protected function price(): Attribute
    {
        return Attribute::get(fn(string $value) => ExchangeRate::convertToTRY($this->currency, $value));
    }

    protected function formattedPrice(): Attribute
    {
        return Attribute::get(fn() => number_format($this->price, 2) . ' ₺');
    }
}
