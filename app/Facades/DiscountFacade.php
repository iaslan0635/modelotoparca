<?php

namespace App\Facades;


use Illuminate\Support\Facades\Log;

class DiscountFacade
{
    public static function reverseCalculate(float|int|string $discountedPrice, float|int|string $discountPercentage)
    {
        if (!is_string($discountedPrice))
            $discountedPrice = number_format($discountedPrice, 2, thousands_separator: '');

        try {
            return bcdiv($discountedPrice, bcsub(1, $discountPercentage, 2), 2);
        } catch (\Throwable $e) {
            Log::channel("important")->error("Error while reverse calculating discount: $e, discountedPrice: $discountedPrice discountPercentage: $discountPercentage");
            throw $e;
        }
    }
}
