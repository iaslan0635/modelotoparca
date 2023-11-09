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
        return match ($order->merchant) {
            "n11" => N11::parseOrder($order),
            "hepsiburada" => Hepsiburada::parseOrder($order),
            "trendyol" => TrendyolMerchant::parseOrder($order),
            default => throw new \InvalidArgumentException("$order->merchant geçerli bir pazar yeri değil (n11, hepsiburada, trendyol)"),
        };
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
}
