<?php

namespace App\Console\Commands;

use App\Services\Merchants\TrendyolMerchant;
use Illuminate\Console\Command;

class TrendyolDetchBrands extends Command
{
    protected $signature = 'trendyol:fetch-brands';

    protected $description = 'Fetch Trendyol Brands';

    public function handle(): void
    {
        $merchant = new TrendyolMerchant();
        $merchant->fetchBrands();
    }
}
