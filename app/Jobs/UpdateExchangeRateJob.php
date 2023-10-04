<?php

namespace App\Jobs;

use App\Facades\ExchangeRate;
use App\Facades\TTL;
use Carbon\CarbonInterval;
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
        $xmlStirng = Http::get("https://www.tcmb.gov.tr/kurlar/today.xml")->body();
        $xml = new SimpleXMLElement($xmlStirng);
        $xml =

        Cache::put('usd_price', (string) 19.3708, TTL::DAY); //Currency[@CurrencyCode="USD"]/BanknoteSelling
        Cache::put('eur_price', (string) 21.3214, TTL::DAY); //Currency[@CurrencyCode="EUR"]/BanknoteSelling
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
            DB::connection('web')->table('products')->where('currency', "'$currency'")->update([
                'price' => DB::raw("CEIL($rate * 100 * untouchedPrice) / 100"),
            ]);
        }

        DB::connection('web')->table('products')->where('currency', "'try'")->update([
            'price' => DB::raw('untouchedPrice'),
        ]);
    }
}
