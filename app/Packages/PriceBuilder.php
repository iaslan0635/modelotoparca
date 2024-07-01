<?php

namespace App\Packages;

use App\Facades\ExchangeRate;
use App\Facades\TaxFacade;
use App\Models\Price;
use Exception;
use Stringable;

final class PriceBuilder implements Stringable
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
        $this->value = $price->price;
        $this->currency = $price->currency;
    }

    public function convertToTRY(): self
    {
        $this->value = ExchangeRate::convertToTRY($this->currency, $this->value, self::SCALE);
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

        if (!$this->price->discount) return $this;

        $discountAmount = match ($this->price->discount_type) {
            'percentile', 'percentage' => bcmul($this->value, $this->price->discount_amount, self::SCALE),
            'fixed' => $this->price->discount_amount,
            default => throw new Exception("PriceBuilder: The discount type ({$this->price->discount_type}) of the price record with id {$this->price->id} is incorrect."),
        };

        $this->value = bcsub($this->value, $discountAmount, self::SCALE);
        $this->discountApplied = true;
        return $this;
    }

    public function addComission(string|int|float $comission): self
    {
        if (!is_numeric($comission)) throw new Exception('Comission must be numeric.');
        if ($comission < 0) throw new Exception('Comission must be a positive number.');
        if ($comission === 0 || $comission === "0") return $this;

        $oldScale = bcscale(self::SCALE);
        $this->value = bcmul($this->value, bcdiv(bcadd(100, $comission), 100));
        bcscale($oldScale);

        return $this;
    }

    public function __toString(): string
    {
        return $this->format();
    }

    public function format(int $decimals = 2): string
    {
        $p = $this->numberFormat($decimals);
        return match (strtolower($this->currency)) {
            'try' => "$p ₺",
            'usd' => "\$$p",
            'eur' => "€$p",
            default => '?',
        };
    }

    public function getValue(): string
    {
        return $this->value;
    }

    function numberFormat(int $decimals = 0, ?string $decimal_separator = '.', ?string $thousands_separator = ','): string
    {
        return number_format($this->value, $decimals, $decimal_separator, $thousands_separator);
    }
}
