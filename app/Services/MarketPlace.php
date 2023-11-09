<?php

namespace App\Services;

use App\Models\MerchantOrder;
use App\Services\Merchants\Hepsiburada;
use App\Services\Merchants\Merchant;
use App\Services\Merchants\N11;
use App\Services\Merchants\TrendyolMerchant;

class MarketPlace
{
    public static function syncOrders(): void
    {
        foreach (self::merchants() as $merchant) {
            $merchant->syncOrders();
        }
    }

    public static function parseOrder(MerchantOrder $order)
    {
        return self::createMerchant($order->merchant)->parseOrder($order);
    }

    /** @return array<Merchant> */
    public static function merchants()
    {
        return [];
//        return [
//            new N11(),
//            new Hepsiburada(),
//            new TrendyolMerchant()
//        ];
    }

    public static function createMerchant(string $merchantAlias): Merchant
    {
        return match ($merchantAlias) {
            "n11" => new N11(),
            "hepsiburada" => new Hepsiburada(),
            "trendyol" => new TrendyolMerchant(),
            default => throw new \InvalidArgumentException("$merchantAlias geçerli bir pazar yeri değil (n11, hepsiburada, trendyol)"),
        };
    }
}
