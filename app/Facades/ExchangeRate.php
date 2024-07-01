<?php

namespace App\Facades;

use App\Jobs\UpdateExchangeRateJob;
use Illuminate\Support\Facades\Cache;

class ExchangeRate
{
    /**
     * @note Ürün fiyatını çevirmek için convert metodlarını kullanın
     *
     * @see ExchangeRate::convertFromTRY()
     * @see ExchangeRate::convertToTRY()
     */
    public static function get(string $currency): string
    {
        $currency = strtolower($currency);

        if ($currency === 'try') {
            return 1;
        }
        if (!($currency === 'usd' || $currency === 'eur')) {
            throw new \InvalidArgumentException('currency must be usd, eur or try');
        }

        $key = $currency . '_rate';

        if (!Cache::has($key)) {
            UpdateExchangeRateJob::updateRates();
            if (!Cache::has($key)) {
                throw new \Exception('UpdateExchangeRateJob::updateRates() is not working properly');
            }
        }

        return Cache::get($key);
    }

    public static function convertFromTRY(string $currency, string $moneyAsTRY, int $scale = 2): string
    {
        if ($currency === 'try') {
            return $moneyAsTRY;
        }

        return bcdiv($moneyAsTRY, self::get($currency), $scale);
    }

    public static function convertToTRY(string $currency, string $moneyAsCurrency, int $scale = 2): string
    {
        if ($currency === 'try') {
            return $moneyAsCurrency;
        }

        return bcmul($moneyAsCurrency, self::get($currency), $scale);
    }
}
