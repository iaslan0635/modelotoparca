<?php

namespace App\Jobs\Import;

use App\Importers\FilterImporter;
use App\Importers\Importer;

class ImportFilterJob extends ImportJob
{
    protected function getImporter(string $path): Importer
    {
        return new FilterImporter($path);
    }
}
