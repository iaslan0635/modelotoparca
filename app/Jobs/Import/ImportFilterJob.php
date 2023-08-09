<?php

namespace App\Jobs\Import;

use App\Importers\FilterImporter;
use App\Importers\Importer;
use App\Jobs\Import\ImportJob;

class ImportFilterJob extends ImportJob
{

    protected function getImporter(string $path): Importer
    {
        return new FilterImporter($path);
    }
}
