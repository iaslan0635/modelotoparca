<?php

namespace App\Models;

use App\Events\PriceChangedEvent;
use App\Facades\ExchangeRate;
use App\Facades\TaxFacade;
use App\Packages\PriceBuilder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Price extends BaseModel
{
    protected $with = ['tax'];

    protected $dispatchesEvents = [
        'updated' => PriceChangedEvent::class,
    ];

    public function tax(): HasOne
    {
        return $this->hasOne(Tax::class, 'id', 'tax_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function builder(): PriceBuilder
    {
        return new PriceBuilder($this);
    }

    public function builderAsTRY(): PriceBuilder
    {
        return PriceBuilder::asTRY($this);
    }

    /** Build price without discount */
    public function listingPrice()
    {
        return $this->builderAsTRY()->applyDiscount()->applyTax();
    }

    /** Build price with discount */
    public function sellingPrice()
    {
        return $this->builderAsTRY()->applyTax();
    }

    protected function price(): Attribute
    {
        return Attribute::get(
            fn(?string $price) => $price === null ? null :
                TaxFacade::calculate(
                    ExchangeRate::convertToTRY($this->currency, $price),
                    $this->tax?->vat_amount ?? 20
                )
        );
    }

    protected function priceWithoutTax(): Attribute
    {
        return Attribute::get(fn() => ExchangeRate::convertToTRY($this->currency, $this->getRawOriginal('price')));
    }

    protected function formattedPrice(): Attribute
    {
        return Attribute::get(fn() => number_format($this->price, 2) . ' ₺');
    }

    protected function realDiscountAmount(): Attribute
    {
        return Attribute::get(fn() => match ($this->discount_type) {
            'percentile', 'percentage' => $this->price * $this->discount_amount,
            'fixed' => $this->discount_amount,
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

    protected function symbol(): Attribute
    {
        return Attribute::get(fn() => match ($this->currency) {
            'usd' => '$',
            'eur' => '€',
            default => '₺',
        });
    }
}
