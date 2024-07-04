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
    protected $signature = 'elastic:import {model=\App\Models\Product} {--c|chunk=500} {--start-id=}';

    protected $description = 'Command description';

    public function handle(Dispatcher $events): void
    {
        $class = $this->argument('model');
        $this->info("Importing $class");

        /** @var Model&Searchable $model */
        $model = new $class;

        $events->listen(ModelsImported::class, function ($event) use ($class) {
            $key = $event->models->last()->getScoutKey();

            $this->line("<comment>Imported [$class] models up to ID:</comment> $key");
        });

        try {
            if ($startId = $this->option('start-id')) {
                $this->info("Starting from ID: $startId");
                $query = $model::query()->where('id', '>', $startId);

                $query
                    ->orderBy($model->qualifyColumn($model->getScoutKeyName()))
                    ->searchable($this->option('chunk'));
            } else {
                $model::makeAllSearchable($this->option('chunk'));
            }
        } catch (BulkOperationException $e) {
            $result = collect($e->rawResult());
            $items = collect($result["items"])->reject(fn($item) => $item["index"]["result"] === "created" || $item["index"]["result"] === "updated");
            $result->forget("items");
            dd($result, $items);
        }

        $events->forget(ModelsImported::class);

        $this->info("All [$class] records have been imported.");
    }
}
