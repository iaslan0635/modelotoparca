<?php

namespace App\Models;

use App\Facades\ExchangeRate;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Price extends BaseModel
{
    protected function price(): Attribute
    {
        return Attribute::get(fn(int $value) => ExchangeRate::convertToTRY($this->currency, $value));
    }

    protected function formattedPrice(): Attribute
    {
        return Attribute::get(fn() => $this->price . '₺');
    }
}
