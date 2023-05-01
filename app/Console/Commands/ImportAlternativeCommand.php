<?php

namespace App\Console\Commands;

use App\Importers\AlternativeImporter;
use App\Importers\Importer;

class ImportAlternativeCommand extends ImportCommand
{
    protected string $importVerb = "alternative";

    protected function getImporter(string $file): Importer
    {
        return new AlternativeImporter($file);
    }
}
