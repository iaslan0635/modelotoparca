<?php

namespace App\Console\Commands\Import;

use App\Importers\AlternativeImporter;
use App\Importers\Importer;

class ImportAlternativeCommand extends ImportCommand
{
    protected string $importVerb = 'alternative';

    protected function getImporter(string $file, ?callable $statusHook): Importer
    {
        return new AlternativeImporter($file, $statusHook);
    }
}
