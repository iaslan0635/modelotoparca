<?php

namespace App\Console\Commands;

use App\Console\Commands\ImportCommand;
use App\Importers\FilterImporter;
use App\Importers\Importer;

class ImportFilterCommand extends ImportCommand
{
    protected string $importVerb = "filter";

    protected function getImporter(string $file): Importer
    {
        return new FilterImporter($file);
    }
}
