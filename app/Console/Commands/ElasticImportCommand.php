<?php

namespace App\Console\Commands;

use Elastic\Adapter\Exceptions\BulkOperationException;
use Illuminate\Console\Command;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Events\ModelsImported;
use Laravel\Scout\Searchable;

class ElasticImportCommand extends Command
{
    protected $signature = 'elastic:import {model=\App\Models\Product} {--c|chunk=500} {--start-id=} {--flush}';

    protected $description = 'Command description';

    public function handle(Dispatcher $events): void
    {
        /** @var class-string<Model&Searchable> $class */
        $class = $this->argument('model');
        $this->info("Importing $class");

        if ($this->option('flush')) {
            $this->info("Removing all [$class] records from search index.");
            $class::removeAllFromSearch();
        }

        $model = new $class;

        $events->listen(ModelsImported::class, function ($event) use ($class) {
            $key = $event->models->last()->getScoutKey();

            $this->line("<comment>Imported [$class] models up to ID:</comment> $key");
        });

        try {
            if ($startId = $this->option('start-id')) {
                $this->info("Starting from ID: $startId");
                $query = $model::query()->where('id', '>=', $startId);

                $query
                    ->orderBy($model->qualifyColumn($model->getScoutKeyName()))
                    ->searchable($this->option('chunk'));
            } else {
                $model::makeAllSearchable($this->option('chunk'));
            }
        } catch (BulkOperationException $e) {
            $result = collect($e->rawResult());
            $items = collect($result['items'])->pluck('index')->filter(fn ($item) => array_key_exists('error', $item));
            $result->forget('items');

            dd($result->all(), $items->all());
        }

        $events->forget(ModelsImported::class);

        $this->info("All [$class] records have been imported.");
    }
}
