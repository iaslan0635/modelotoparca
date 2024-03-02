<?php

namespace App\Services;

use App\Enums\OrderRejectReasonType;
use App\Models\MerchantOrder;
use App\Models\Product;
use App\Services\Merchants\Hepsiburada;
use App\Services\Merchants\Merchant;
use App\Services\Merchants\N11;
use App\Services\Merchants\TrackableMerchant;
use App\Services\Merchants\TrendyolMerchant;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use Throwable;

class MarketPlace
{
    public const MERCHANTS = ['n11', 'hepsiburada', 'trendyol'];

    public static function errorContext(callable $function)
    {
        try {
            $function();
        } catch (Throwable $t) {
            Log::channel('merchants')->error($t->getMessage(), ['exception' => $t]);
        }
    }

    public static function syncOrders(): void
    {
        foreach (self::merchants() as $merchant) {
            MarketPlace::errorContext(fn () => $merchant->syncOrders());
        }
    }

    public static function syncQuestions(): void
    {
        foreach (self::merchants() as $merchant) {
            MarketPlace::errorContext(fn () => $merchant->syncQuestions());
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
            'n11' => new N11(),
            'hepsiburada' => new Hepsiburada(),
            'trendyol' => new TrendyolMerchant(),
        ];
    }

    public static function createMerchant(string $merchantAlias): Merchant
    {
        return match ($merchantAlias) {
            'n11' => new N11(),
            'hepsiburada' => new Hepsiburada(),
            'trendyol' => new TrendyolMerchant(),
            default => throw new InvalidArgumentException("$merchantAlias geçerli bir pazar yeri değil"),
        };
    }

    public static function createTrackableMerchant(string $merchantAlias): TrackableMerchant
    {
        return match ($merchantAlias) {
            'hepsiburada' => new Hepsiburada(),
            'trendyol' => new TrendyolMerchant(),
            default => throw new InvalidArgumentException("$merchantAlias geçerli bir takip edilebilir pazar yeri değil"),
        };
    }

    public static function declineOrder(MerchantOrder $merchantOrder, string $lineId, OrderRejectReasonType $reasonType)
    {
        $merchant = self::createMerchant($merchantOrder->merchant);
        $quantity = ! $merchant instanceof TrendyolMerchant ? -1 :
            collect($merchant->parseOrder($merchantOrder)['items'])->firstWhere('id', $lineId)['quantity'];

        $merchant->declineOrder($lineId, $reasonType, $merchantOrder->id, $quantity);
        $merchantOrder->status = 'İptal Edildi';
        $merchantOrder->save();
    }

    public static function getProductExistence(Product $product): array
    {
        return array_map(
            fn (Merchant $merchant) => rescue(
                fn () => $merchant->productExists($product),
                fn () => 'Hata',
                report: false
            ),
            self::merchants()
        );
    }
}
