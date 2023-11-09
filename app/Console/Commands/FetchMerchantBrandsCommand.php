<?php

namespace App\Console\Commands;

use App\Services\MarketPlace;
use App\Services\Merchants\TrendyolMerchant;
use Illuminate\Console\Command;

class FetchMerchantBrandsCommand extends Command
{
    protected $signature = 'fetch:trendyol-brands';

    protected $description = 'Fetch Trendyol Brands';

    public function handle(): void
    {
        $merchant = new TrendyolMerchant();
        $merchant->fetchBrands();
    }
}
