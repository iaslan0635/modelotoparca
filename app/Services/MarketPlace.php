<?php

namespace App\Services;

use App\Models\MerchantOrder;
use App\Services\Merchants\Hepsiburada;
use App\Services\Merchants\Merchant;
use App\Services\Merchants\N11;
use App\Services\Merchants\TrendyolMerchant;

class MarketPlace
{
    /*
     * Siparişleri eşitlemek için lazım.
     */
    public static function orders(): void
    {
        (new N11)->syncOrders();
    }

    public static function getClientOutput(MerchantOrder $order)
    {
        if ($order->merchant === "n11") {
            return N11::getClientOutput($order->client);
        }
    }

    /** @return array<Merchant> */
    public static function merchants()
    {
        return [];
//        [
//            new N11(),
//            new Hepsiburada(),
//            new TrendyolMerchant()
//        ];
    }
}
