<?php

namespace App\Packages;

use App\Facades\ExchangeRate;
use App\Facades\TaxFacade;
use App\Models\Price;
use Exception;

final class PriceBuilder
{
    private const SCALE = 8;

    private Price $price;
    private string $value;
    private string $currency;
    private bool $taxApplied = false;
    private bool $discountApplied = false;

    public function __construct(Price $price)
    {
        $this->price = $price;
        $this->value = $price->getRawOriginal('price');
        $this->currency = $price->currency;
    }

    public function convertToTRY(): self
    {
        if ($this->taxApplied || $this->discountApplied) {
            throw new Exception('TRY conversion must be done before modifying price value.');
        }

        $try_price = $this->price->try_price;
        if ($try_price === null) {
            throw new Exception("The try_price of price record with id {$this->price->id} is null.");
        }

        $this->value = $try_price;
        $this->currency = 'try';
        return $this;
    }

    public function applyTax(): self
    {
        if ($this->taxApplied) {
            throw new Exception('Tax has already been applied to this price.');
        }

        $vat_amount = $this->price->tax?->vat_amount ?? 20;
        $this->value = TaxFacade::calculate($this->value, $vat_amount, self::SCALE);
        $this->taxApplied = true;
        return $this;
    }

    public function applyDiscount(): self
    {
        if ($this->discountApplied) {
            throw new Exception('Discount has already been applied to this price.');
        }

        $discountAmount = match ($this->price->discount_type) {
            'percentile', 'percentage' => $this->value * $this->price->discount_amount,
            'fixed' => $this->price->discount_amount,
            default => throw new Exception("PriceBuilder: The discount type ({$this->price->discount_type}) of the price record with id {$this->price->id} is incorrect."),
        };

        $this->value = bcsub($this->value, $discountAmount, 4);
        $this->discountApplied = true;
        return $this;
    }

    public function format(): string
    {
        $symbol = match (strtolower($this->currency)) {
            'try' => '₺',
            'usd' => '$',
            'eur' => '€',
            default => '?',
        };

        return number_format($this->value, 2) . ' ' . $symbol;
    }

    public function __toString(): string
    {
        return $this->format();
    }

    public function getValue()
    {
        return $this->value;
    }
}
