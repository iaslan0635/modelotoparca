<?php

namespace App\Facades;

class TaxFacade
{
    public static function calculate($amount, $percentage = 0): float
    {
        return (float) $amount + (($amount / 100) * $percentage);
    }

    public static function formattedPrice($amount): string
    {
        return number_format($amount, 2).' ₺';
    }
}
