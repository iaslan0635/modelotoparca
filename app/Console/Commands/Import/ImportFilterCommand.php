<?php

namespace App\Console\Commands\Import;

use App\Importers\FilterImporter;
use App\Importers\Importer;

class ImportFilterCommand extends ImportCommand
{
    protected string $importVerb = 'filter';

    protected function getImporter(string $file, ?callable $statusHook): Importer
    {
        return new FilterImporter($file, $statusHook);
    }
}
