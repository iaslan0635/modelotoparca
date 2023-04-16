<?php

namespace App\Jobs;

use App\Facades\ExchangeRate;
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
        /*$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tcmb.gov.tr/kurlar/today.xml");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
        curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');
        $xmlStr = curl_exec($ch);
        curl_close($ch);

        $xml = new SimpleXMLElement($xmlStr);*/

        $ttl = new CarbonInterval(0, 0, 0, 1);

        Cache::put('usd_price', (string) 19.3708, $ttl); # //Currency[@CurrencyCode="USD"]/BanknoteSelling
        Cache::put('eur_price', (string) 21.3214, $ttl); # //Currency[@CurrencyCode="EUR"]/BanknoteSelling
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
