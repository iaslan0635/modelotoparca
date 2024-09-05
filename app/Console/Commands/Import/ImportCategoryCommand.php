<?php

namespace App\Console\Commands\Import;

use App\Console\Commands\Import\ImportCommand;
use App\Importers\CategoryImporter;
use App\Importers\Importer;

class ImportCategoryCommand extends ImportCommand
{
    protected string $importVerb = 'category';

    protected function getImporter(string $file, ?callable $statusHook): Importer
    {
        return new CategoryImporter($file, $statusHook);
    }
}
