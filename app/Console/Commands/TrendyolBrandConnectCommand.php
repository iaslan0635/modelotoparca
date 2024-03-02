<?php

namespace App\Console\Commands;

use App\Models\Brand;
use App\Models\MerchantBrandConnect;
use App\Models\TrendyolBrand;
use Illuminate\Console\Command;
use Illuminate\Database\UniqueConstraintViolationException;

class TrendyolBrandConnectCommand extends Command
{
    protected $signature = 'trendyol:brand-connect';

    protected $description = 'Command description';

    public function handle(): void
    {
        $this->withProgressBar(Brand::all(), function (Brand $brand) {
            $tb = TrendyolBrand::where('name', $brand->name)->first();
            if ($tb) {
                try {
                    MerchantBrandConnect::create([
                        'merchant' => 'trendyol',
                        'merchant_id' => $tb->id,
                        'brand_id' => $brand->id,
                    ]);
                } catch (UniqueConstraintViolationException) {
                }
            }
        });
    }
}
