<?php

namespace App\Jobs\Import;

use App\Importers\Importer;
use Elastic\Adapter\Exceptions\BulkOperationException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

abstract class ImportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function handle(): void
    {
        try {
            $this->getImporter(Storage::path($this->filePath))->import();
            Storage::delete($this->filePath);
        } catch (BulkOperationException $exception) {
            throw new \Exception('Elasticsearch bulk import failed. Raw Result: '.json_encode($exception->rawResult()));
        }
    }

    abstract protected function getImporter(string $path): Importer;
}
