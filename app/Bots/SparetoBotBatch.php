<?php

namespace App\Bots;

use App\Jobs\SparetoConnectJob;
use App\Models\Product;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Traits\EnumeratesValues;
use Throwable;

class SparetoBotBatch implements ShouldQueue, ShouldBeUnique
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use EnumeratesValues;

    public function __construct(
        public readonly array $botParamsArray
    )
    {
    }

    public function handle()
    {
        foreach ($this->botParamsArray as $botParam) {
            try {
                $bot = new SparetoBot(...$botParam);
                $bot->handle();
            } catch (Throwable $t) {
                report($t);
            }
        }
    }

    public static function dispatchInBatches($botParamsArray, string $batchId, int $batchCount = 32)
    {
        $botParamsArrayArray = collect($botParamsArray)->chunk(ceil(count($botParamsArray) / $batchCount));
        Bus::batch(
            $botParamsArrayArray->map(fn($bpa) => new SparetoBotBatch($this->getArrayableItems($bpa)))
        )->finally(function () use ($batchId) {
            SparetoConnectJob::connectAll($batchId);
        })->dispatch();
    }

    public static function dispatchForAll(string $batchId, int $batchCount = 32)
    {
        $botToParams = fn(SparetoBot $bot) => [
            "keyword" => $bot->keyword,
            "keywordField" => $bot->keywordField,
            "batchId" => $bot->batchId
        ];
        $botParamsArray = [];

        foreach (Product::where("batch_id", $batchId)->lazy() as $product) {
            $bots = SparetoBot::newForAllFields($product, $batchId);
            foreach ($bots as $bot) {
                $botParamsArray[] = $botToParams($bot);
            }
        }

        self::dispatchInBatches($botParamsArray, $batchId, $batchCount);
    }
}
