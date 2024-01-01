<?php

namespace App\Console\Commands;

use App\Jobs\RunSingleBotJob;
use App\Models\TigerProduct;
use Illuminate\Console\Command;
use Throwable;

class BotCommand extends Command
{
    protected $signature = 'bot {--queue=} {--filter=} {--failsafe}';

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
                if ($this->option('failsafe')) throw $throwable;

                $this->info("Exception on $id");
                report($throwable);
            }
        });
    }

    public function handleProduct(int $productId)
    {
        $product = TigerProduct::findOrFail($productId);
        $job = new RunSingleBotJob($product);
        if ($this->option('queue')) {
            dispatch($job->onQueue($this->option('queue')));
        } else {
            dispatch_sync($job);
        }
    }
}
