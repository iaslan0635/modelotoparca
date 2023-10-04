<?php

namespace App\Models;

use App\Events\PriceChangedEvent;
use App\Facades\ExchangeRate;
use App\Facades\TaxFacade;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Price extends BaseModel
{
    protected $with = ['tax'];
    protected $dispatchesEvents =[
        "updated" => PriceChangedEvent::class // RELATION_CONFLICT
    ];

    protected function price(): Attribute
    {
        return Attribute::get(fn (string $value) => TaxFacade::calculate(ExchangeRate::convertToTRY($this->currency, $value), $this->tax?->vat_amount));
    }

    public function tax(): HasOne
    {
        return $this->hasOne(Tax::class, 'id', 'tax_id');
    }

    protected function formattedPrice(): Attribute
    {
        return Attribute::get(fn () => number_format($this->price, 2).' ₺');
    }
}
