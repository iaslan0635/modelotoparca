<?php

namespace App\Console\Commands;

use App\Jobs\Import\ExcelImport;
use App\Jobs\RunSingleBotJob;
use App\Models\TigerProduct;
use Illuminate\Console\Command;
use Throwable;

class BotCommand extends Command
{
    protected $signature = 'bot {--queue} {--filter=}';

    public function handle(): void
    {
        $query = match ($this->option("filter")) {
            null => TigerProduct::query(),
            "non-car" => TigerProduct::doesntHave("cars"),
            "last-50" => TigerProduct::latest()->limit(50),
        };

        $ids = $query->latest()->pluck('id');

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
        if ($this->option('queue')) {
            RunSingleBotJob::dispatch($product)->onQueue("low");
        } else {
            ExcelImport::runBot($product);
        }
    }
}
