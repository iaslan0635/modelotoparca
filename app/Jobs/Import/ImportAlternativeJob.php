<?php

namespace App\Jobs\Import;

use App\Importers\AlternativeImporter;
use App\Importers\Importer;

class ImportAlternativeJob extends ImportJob
{
    protected function getImporter(string $path): Importer
    {
        return new AlternativeImporter($path);
    }
}
