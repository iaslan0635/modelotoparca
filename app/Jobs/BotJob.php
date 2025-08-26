<?php

namespace App\Jobs;

use App\Models\BotProduct;
use App\Models\Brand;
use App\Models\Log;
use App\Models\ProductOem;
use App\Models\ProductSimilar;
use App\Models\TigerProduct;
use App\Services\Bots\OnlineCarParts;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Uid\Ulid;

class BotJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    const VERSION = 4; // Used for logging

    private static $botMock = null;
    private string $logContextId;

    public function __construct(
        public readonly TigerProduct $product
    )
    {
        $this->onQueue('bot');
        $this->logContextId = Ulid::generate();
    }

    public function handle(): void
    {
        $product = $this->product;
        $this->clearBotAssociations($product);
        $this->runBotForProduct($product);
        $product->actualProduct?->searchable();
    }

    private function runBotForProduct(TigerProduct $product): bool
    {
        $search_predence = [
            'abk',
            'producercode',
            'producercode2',
            'cross_code',
            'oem_codes',
        ];

        foreach ($search_predence as $field) {
            if ($product[$field] === null) {
                $this->log($product, 'Boş (null) değer atlandı.', ['Kolon' => $field]);

                continue;
            }

            $value = trim($product[$field]);
            if (strlen($value) === 0) {
                $this->log($product, 'Boş değer atlandı.', ['Kolon' => $field]);

                continue;
            }

            foreach ([true, false] as $ajax) {
                $this->log($product, 'Bot başlatılıyor', ['Kolon' => $field, 'Ajax' => $ajax]);

//                try {
//                    $found = $this->runBotForField($product, $field, $value, $ajax);
//                } catch (\Throwable $throwable) {
//                    $this->log($product, 'Bot hata ile karşılaştı. Lütfen geliştiricileri bilgilendirin.', ['Kolon' => $field]);
//                    throw $throwable;
//                }

                            try {
                                    $found = $this->runBotForField($product, $field, $value, $ajax);
                              } catch (\Throwable $e) {
                                    // Hata bu alana özgüyse job’ı bitirme; logla ve sıradaki denemeye geç
                                    $this->log($product, 'Bot hata ile karşılaştı; alan atlanıyor.', [
                                          'Kolon' => $field,
                                           'Hata'  => $e->getMessage(),
                                       ]);$found = false;
                               }


                if ($found) {
                    $this->log(
                        $product, 'Ürün bulundu, bot sonlandırılıyor.',
                        [
                            'Kolon' => $field,
                            'Değer' => $value,
                            'Marka filtresi' => $brand_filter ?? '(Yok)',
                            'Ajax' => $ajax,
                        ]
                    );

                    return true;
                }
            }
        }

        return false;
    }

    private function runBotForField(TigerProduct $product, string $field, string $value, bool $ajax): bool
    {
        if ($field === 'oem_codes') {
            $oems = explode(',', $product[$field]);
            foreach ($oems as $oem) {
                $trimmed = trim($oem);
                if (strlen($trimmed) < 5) {
                    continue;
                }

                $this->smashBot(
                    keyword: $trimmed,
                    product_id: $product->id,
                    field: $field,
                );
            }

            return false;
        }

        $brand_filter = $field === 'producercode' || $field === 'producercode2' ? $this->getBrand($product) : null;

        if ($field === 'abk' && str_contains($value, '@')) {
            [$brand_filter, $value] = explode('@', $value);
        }

        return $this->smashBot(
            keyword: $value,
            product_id: $product->id,
            field: $field,
            brand_filter: $brand_filter,
            ajax: $ajax,
        );
    }

    private function smashBot(
        string $keyword,
        int    $product_id,
        string $field,
        string $brand_filter = null,
        bool   $regexed = false,
        bool   $ajax = false,
    )
    {
        if (self::$botMock) {
            return self::$botMock->smash($product_id);
        }

        return (new OnlineCarParts(
            keyword: $keyword,
            product_id: $product_id,
            field: $field,
            brand_filter: $brand_filter,
            regexed: $regexed,
            ajax: $ajax,
            logContextId: $this->logContextId,
        ))->smash();
    }

    public function clearBotAssociations(TigerProduct $product)
    {
        ProductSimilar::query()->where('product_id', $product->id)->delete();

        ProductOem::query()->where('type', '=', 'automatic')
            ->where('logicalref', $product->id)
            ->delete();

        $product->cars()->sync([]);
        BotProduct::where('product_id', $product->id)->where('is_banned', false)->delete();

        if ($product->cross_code) {
            ProductSimilar::insertOrIgnore([
                'product_id' => $product->id,
                'code' => $product->cross_code,
            ]);
        }

        $oems = explode(',', $product->oem_codes ?? '');
        foreach ($oems as $oem) {
            ProductOem::insertOrIgnore([
                'logicalref' => $product->id,
                'oem' => $oem,
            ]);

            ProductOem::insertOrIgnore([
                'logicalref' => $product->id,
                'oem' => $oem,
            ]);
        }

        $product->actualProduct?->update([
            'tecdoc' => null,
            'specifications' => null,
        ]);
    }

    private function getBrand(TigerProduct $product): ?string
    {
        $brand = Brand::find($product->markref, ['name', 'botname']);
        if (!$brand) {
            return null;
        }

        return $brand->botname ?? $brand->name;
    }

    private function log(int|Model $productOrId, string $message, array $context = null)
    {
        $productId = $productOrId instanceof Model ? $productOrId->getKey() : $productOrId;

        return Log::log(
            $productId,
            $message,
            $context,
            'bot-manager-v' . self::VERSION,
            $this->logContextId
        );
    }

    public static function mockBot($mockInstance)
    {
        self::$botMock = $mockInstance;
    }

    public static function isOldVersion(string $logSource)
    {
        $version = str_replace('bot-manager-v', '', $logSource);

        return $version != self::VERSION;
    }
}
