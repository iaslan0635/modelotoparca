<?php

namespace App\Services;

use App\Models\MerchantOrder;
use App\Models\Tracking;
use App\Services\Merchants\Hepsiburada;
use App\Services\Merchants\Merchant;
use App\Services\Merchants\N11;
use App\Services\Merchants\TrackableMerchant;
use App\Services\Merchants\TrendyolMerchant;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Pagination\Paginator;
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
            default => throw new \InvalidArgumentException("$merchantAlias geçerli bir pazar yeri değil"),
        };
    }

    public static function createTrackableMerchant(string $merchantAlias): TrackableMerchant & Merchant
    {
        return match ($merchantAlias) {
            "hepsiburada" => new Hepsiburada(),
            "trendyol" => new TrendyolMerchant(),
            default => throw new \InvalidArgumentException("$merchantAlias geçerli bir izlenebilir pazar yeri değil"),
        };
    }

    public static function getFailedProducts($perPage = null)
    {
        // Resolve all unresolved trackings
        $latestQuery = Tracking::groupBy("product_id", "merchant")->latest();

        foreach ($latestQuery->clone()->whereNull("result")->cursor() as $tracking) {
            $merchant = MarketPlace::createTrackableMerchant($tracking->merchant);
            $result = $merchant->getTrackingResult($tracking->tracking_id);

            $result->fill($tracking);
            $tracking->save();
        }

        // Return all failed trackings
        $failedTrackings = $latestQuery->clone()->where("result", false)->with("product")->paginate($perPage);

        $items = $failedTrackings->groupBy("product.id")->map(fn($entries) => [
            "product" => $entries[0]->product,
            "merchants" => $entries->map->merchant,
            "trackings" => $entries,
        ]);

        return $failedTrackings->setCollection($items);
    }
}
