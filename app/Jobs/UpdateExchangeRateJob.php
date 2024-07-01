<?php

namespace App\Jobs;

use App\Facades\ExchangeRate;
use App\Facades\TTL;
use App\Models\Price;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;

class UpdateExchangeRateJob
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public static function updateRates()
    {
        // TODO: find alternative to tcmb
        $xmlStirng = Http::withoutVerifying()->get('https://kur.doviz.day')->body();

        $xml = new SimpleXMLElement($xmlStirng);
        $usd = (string)$xml->xpath('Currency[@CurrencyCode="USD"]/BanknoteSelling')[0];
        $eur = (string)$xml->xpath('Currency[@CurrencyCode="EUR"]/BanknoteSelling')[0];

        Cache::put('usd' . ExchangeRate::CACHE_KEY_SUFFIX, $usd, TTL::DAY);
        Cache::put('eur' . ExchangeRate::CACHE_KEY_SUFFIX, $eur, TTL::DAY);
    }

    public function handle()
    {
        self::updateRates();
        $this->updateWeb();
    }

    protected function updateWeb()
    {
        foreach (['usd', 'eur'] as $currency) {
            $rate = ExchangeRate::get($currency);
            Price::where('currency', $currency)->update([
                'try_price' => DB::raw("price * $rate"),
            ]);
        }
    }
}
