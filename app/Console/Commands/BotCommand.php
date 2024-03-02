<?php

namespace App\Console\Commands;

use App\Jobs\RunSingleBotJob;
use App\Models\TigerProduct;
use Illuminate\Console\Command;
use Illuminate\Contracts\Database\Query\Builder;
use Throwable;

class BotCommand extends Command
{
    protected $signature = 'bot {--queue=} {--filter=} {--failsafe}';

    public function handle(): void
    {
        $query = match ($this->option('filter')) {
            null => TigerProduct::query(),
            'non-car' => TigerProduct::doesntHave('cars'),
            'last-50' => TigerProduct::latest()->limit(50),
        };

        self::runBotsForQuery($this, $query, $this->option('queue'), $this->option('failsafe'));
    }

    public static function runBotsForQuery(Command $commandContext, Builder $query, ?string $queue = 'default', bool $failsafe = false)
    {
        $ids = $query->latest()->pluck('id');

        $commandContext->withProgressBar($ids, function (int $id) use ($failsafe, $commandContext, $queue) {
            try {
                self::handleProduct($id, $queue);
            } catch (Throwable $throwable) {
                if ($failsafe) {
                    throw $throwable;
                }

                $commandContext->info("Exception on $id");
                report($throwable);
            }
        });
    }

    public static function handleProduct(int $productId, ?string $queue)
    {
        $product = TigerProduct::findOrFail($productId);
        $job = new RunSingleBotJob($product);
        if ($queue) {
            dispatch($job->onQueue($queue));
        } else {
            dispatch_sync($job);
        }
    }
}
