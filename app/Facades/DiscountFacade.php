<?php

namespace App\Facades;


use Illuminate\Support\Facades\Log;

class DiscountFacade
{
    public static function reverseCalculate(float|int|string $discountedPrice, float|int|string $discountPercentage)
    {
        if (!is_numeric($discountedPrice) || !is_numeric($discountPercentage)) {
            Log::channel("important")->error("Both arguments must be numeric discountedPrice: $discountedPrice discountPercentage: $discountPercentage");
        }

        return bcdiv($discountedPrice, bcsub(1, $discountPercentage, 2), 2);
    }
}
