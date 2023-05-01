<?php

namespace App\Console\Commands;

use App\Importers\Importer;
use App\Importers\TigerImporter;

class ImportTigerCommand extends ImportCommand
{
    protected string $importVerb = "tiger";

    protected function getImporter(string $file): Importer
    {
        return new TigerImporter($file);
    }
}
