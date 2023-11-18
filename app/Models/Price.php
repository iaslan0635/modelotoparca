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

    protected $dispatchesEvents = [
        'updated' => PriceChangedEvent::class,
    ];

    protected function price(): Attribute
    {
        return Attribute::get(fn(string $value) => TaxFacade::calculate(ExchangeRate::convertToTRY($this->currency, $value), $this->tax?->vat_amount));
    }

    protected function priceWithoutTax(): Attribute
    {
        return Attribute::get(fn() => ExchangeRate::convertToTRY($this->currency, $this->getRawOriginal('price')));
    }

    public function tax(): HasOne
    {
        return $this->hasOne(Tax::class, 'id', 'tax_id');
    }

    protected function formattedPrice(): Attribute
    {
        return Attribute::get(fn() => number_format($this->price, 2) . ' ₺');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected function realDiscountAmount(): Attribute
    {
        return Attribute::get(fn() => match ($this->discount_type) {
            "percentile" => $this->price * $this->discount_amount,
            "fixed" => $this->discount_amount,
            default => throw new \Exception("The discount type ($this->discount_type) of the price record with id $this->id is incorrect."),
        });
    }

    protected function discountedPrice(): Attribute
    {
        return Attribute::get(fn() => $this->price - $this->real_discount_amount);
    }

    protected function discountedPriceWithoutTax(): Attribute
    {
        return Attribute::get(fn() => $this->price_without_tax - $this->real_discount_amount);
    }
}
