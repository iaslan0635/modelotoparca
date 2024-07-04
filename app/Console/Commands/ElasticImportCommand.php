<?php

namespace App\Console\Commands;

use Elastic\Adapter\Exceptions\BulkOperationException;
use Illuminate\Console\Command;
use Illuminate\Contracts\Events\Dispatcher;
use Laravel\Scout\Events\ModelsImported;

class ElasticImportCommand extends Command
{
    protected $signature = 'elastic:import {model=\App\Models\Product} {--c|chunk=500}';

    protected $description = 'Command description';

    public function handle(Dispatcher $events): void
    {
        $class = $this->argument('model');
        $this->info("Importing $class");

        $model = new $class;

        $events->listen(ModelsImported::class, function ($event) use ($class) {
            $key = $event->models->last()->getScoutKey();

            $this->line("<comment>Imported [$class] models up to ID:</comment> $key");
        });

        try {
            $model::makeAllSearchable($this->option('chunk'));
        } catch (BulkOperationException $e) {
            dd($e->rawResult());
        }

        $events->forget(ModelsImported::class);

        $this->info("All [$class] records have been imported.");
    }
}
