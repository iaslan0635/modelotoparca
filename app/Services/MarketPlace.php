<?php

namespace App\Services;

use App\Models\MerchantOrder;
use App\Models\Tracking;
use App\Services\Merchants\Hepsiburada;
use App\Services\Merchants\Merchant;
use App\Services\Merchants\N11;
use App\Services\Merchants\TrackableMerchant;
use App\Services\Merchants\TrendyolMerchant;
use Illuminate\Support\Facades\Log;

class MarketPlace
{
    public static function errorContext(callable $function)
    {
        try {
            $function();
        } catch (\Throwable $t) {
            Log::channel("merchants")->error($t->getMessage(), ['exception' => $t]);
        }
    }

    public static function syncOrders(): void
    {
        foreach (self::merchants() as $merchant) {
            MarketPlace::errorContext(fn() => $merchant->syncOrders());
        }
    }

    public static function parseOrder(MerchantOrder $order)
    {
        return self::createMerchant($order->merchant)->parseOrder($order);
    }

    /** @return array<string, Merchant> */
    public static function merchants()
    {
        return [
            "n11" => new N11(),
            "hepsiburada" => new Hepsiburada(),
            "trendyol" => new TrendyolMerchant()
        ];
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

    public static function getFailedProducts($perPage = null)
    {
        function fetchStatus(Tracking $tracking)
        {
            $merchant = MarketPlace::createMerchant($tracking->merchant);
            if (!$merchant instanceof TrackableMerchant) throw new \Exception("Attempted to track non trackable merchant.");
            $result = $merchant->getTrackingResult($tracking->tracking_id);

            $result->fill($tracking);
            $tracking->save();

            return $result->success;
        }

        $failedProducts = collect();

        $latestTrackings = Tracking::groupBy("product_id", "merchant")->with("product")->latest()->paginate($perPage);
        foreach ($latestTrackings as $tracking) {
            if ($tracking->success === false || ($tracking->success === null && fetchStatus($tracking)))
                $failedProducts[] = ["product" => $tracking->product, "merchant" => $tracking->merchant];
        }

        return $latestTrackings->setCollection(
            $failedProducts->groupBy("product.id")->map(fn($entries) => ["product" => $entries[0]["product"], "merchants" => $entries->map->merchant])
        );
    }
}
