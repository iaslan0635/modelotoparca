<?php

namespace App\Facades;

class TaxFacade
{
    /**
     * @param float|int|string $amount tax free price
     * @param float|int|string $percentage tax percentage multiplied by one hundred. For example, use 20 if tax rate is 20%
     * @param int $scale
     * @return string price with tax
     */
    public static function calculate(float|int|string $amount, float|int|string $percentage = 0, int $scale = 2): string
    {
        $oldScale = bcscale($scale);
        $result = bcadd($amount, bcmul(bcdiv($amount, 100), $percentage));
        bcscale($oldScale);
        return $result;
    }

    public static function formattedPrice($amount): string
    {
        return number_format($amount, 2) . ' ₺';
    }

    /**
     * @param float|int|string $total price with tax
     * @param float|int|string $percentage tax percentage multiplied by one hundred. For example, use 20 if tax rate is 20%
     * @param int $scale
     * @return string tax free price
     */
    public static function reverseCalculate(float|int|string $total, float|int|string $percentage = 0, int $scale = 2): string
    {
        $oldScale = bcscale($scale);
        $result = bcmul(bcdiv($total, bcadd(100, $percentage)), 100);
        bcscale($oldScale);
        return $result;
    }
}
