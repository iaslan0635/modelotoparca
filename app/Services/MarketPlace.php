<?php

namespace App\Services;

use App\Models\MerchantOrder;
use App\Services\Merchants\N11;

class MarketPlace
{
    /*
     * Siparişleri eşitlemek için lazım.
     */
    public static function orders(): void
    {
        N11::orders();
    }

    public static function getClientOutput(MerchantOrder $order)
    {
        if ($order->merchant === "n11"){
            return N11::getClientOutput($order->client);
        }
    }
}
