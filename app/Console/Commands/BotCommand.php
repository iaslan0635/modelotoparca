<?php

namespace App\Console\Commands;

use App\Jobs\RunSingleBotJob;
use App\Models\TigerProduct;
use Illuminate\Console\Command;
use Illuminate\Contracts\Database\Query\Builder;
use Throwable;

class BotCommand extends Command
{
    protected $signature = 'bot {--queue=default} {--filter=} {--failsafe} {--sync}';

    public function handle(): void
    {
        $query = match ($this->option('filter')) {
            null => TigerProduct::query(),
            'non-car' => TigerProduct::doesntHave('cars'),
            'last-50' => TigerProduct::latest()->limit(50),
        };

        self::runBotsForQuery($this, $query, $this->option('failsafe'));
    }

    public function runBotsForQuery(Command $commandContext, Builder $query, bool $failsafe = false)
    {
        $ids = $query->latest()->pluck('id');

        $commandContext->withProgressBar($ids, function (int $id) use ($failsafe, $commandContext) {
            try {
                self::handleProduct($id);
            } catch (Throwable $throwable) {
                if ($failsafe) {
                    throw $throwable;
                }

                $commandContext->info("Exception on $id");
                report($throwable);
            }
        });
    }

    public function handleProduct(int $productId)
    {
        $product = TigerProduct::findOrFail($productId);
        $job = new RunSingleBotJob($product);
        if ($this->option('sync')) {
            dispatch_sync($job);
        } else {
            dispatch($job->onQueue($this->option('queue')));
        }
    }
}
