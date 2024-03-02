<?php

namespace App\Facades;

class TaxFacade
{
    /**
     * @param  float  $amount tax free price
     * @param  float  $percentage tax percentage multiplied by one hundred. For example, use 20 if tax rate is 20%
     * @return float price with tax
     */
    public static function calculate(float $amount, float $percentage = 0): float
    {
        return $amount + (($amount / 100) * $percentage);
    }

    public static function formattedPrice($amount): string
    {
        return number_format($amount, 2).' ₺';
    }

    /**
     * @param  float  $total price with tax
     * @param  float  $percentage tax percentage multiplied by one hundred. For example, use 20 if tax rate is 20%
     * @return float tax free price
     */
    public static function reverseCalculate(float $total, float $percentage = 0): float
    {
        return ($total / ($percentage + 100)) * 100;
    }
}
