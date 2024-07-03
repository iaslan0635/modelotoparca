<?php

namespace App\Facades;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ExchangeRate
{
    /**
     * @note Ürün fiyatını çevirmek için convert metodlarını kullanın
     *
     * @see ExchangeRate::convertFromTRY()
     * @see ExchangeRate::convertToTRY()
     */
    public static function getRate(string $currency): string
    {
        $currency = strtolower($currency);

        if ($currency === 'try') {
            return 1;
        }

        if (!($currency === 'usd' || $currency === 'eur')) {
            throw new \InvalidArgumentException("currency ($currency) must be usd, eur or try");
        }

        $allRates = self::getAllRates();
        return $allRates[$currency];
    }

    public static function getAllRates()
    {
        return Cache::remember('exchange_rates', TTL::DAY, function () {
            $xmlStirng = Http::withoutVerifying()->throw()->get('https://kur.doviz.day')->body();

            $xml = new \SimpleXMLElement($xmlStirng);
            $usd = (string)$xml->xpath('Currency[@CurrencyCode="USD"]/BanknoteSelling')[0];
            $eur = (string)$xml->xpath('Currency[@CurrencyCode="EUR"]/BanknoteSelling')[0];

            return [
                'usd' => $usd,
                'eur' => $eur,
            ];
        });
    }

    public static function convertFromTRY(string $currency, string $moneyAsTRY, int $scale = 2): string
    {
        return bcdiv($moneyAsTRY, self::getRate($currency), $scale);
    }

    public static function convertToTRY(string $currency, string $moneyAsCurrency, int $scale = 2): string
    {
        return bcmul($moneyAsCurrency, self::getRate($currency), $scale);
    }
}
