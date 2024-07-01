<?php

namespace App\Facades;

class DiscountFacade
{
    public static function reverseCalculate(float|int|string $discountedPrice, float|int|string $discountPercentage)
    {
        return bcdiv($discountedPrice, bcsub(1, $discountPercentage, 2), 2);
    }
}
