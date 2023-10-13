<?php

namespace App\Console\Commands;

use App\Jobs\Import\ExcelImport;
use App\Models\TigerProduct;
use App\Services\Sperato;
use Illuminate\Console\Command;
use Throwable;

class BotCommand extends Command
{
    protected $signature = 'bot';

    public function handle(): void
    {
        $ids = TigerProduct::query()->pluck('id');

        $this->withProgressBar($ids, function (int $id) {
            try {
                $this->handleProduct($id);
            } catch (Throwable $throwable) {
                $this->info("Exception on $id");
                report($throwable);
            }
        });
    }

    public function handleProduct(int $productId)
    {
        $product = TigerProduct::findOrFail($productId);
        ExcelImport::runBot($product);
    }
}
