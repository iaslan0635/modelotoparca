<?php

namespace App\Facades;

use InvalidArgumentException;

class DiscountFacade
{
    public static function reverseCalculate(float $discountedPrice, float $discountPercentage) {
        // Ensure the discount percentage is between 0 and 100
        if ($discountPercentage < 0 || $discountPercentage > 100) {
            throw new InvalidArgumentException("Discount percentage must be between 0 and 100.");
        }

        // Calculate the original price
        return $discountedPrice / (1 - ($discountPercentage / 100));
    }
}
