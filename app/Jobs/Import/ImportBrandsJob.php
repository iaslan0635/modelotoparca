<?php

namespace App\Jobs\Import;

use App\Importers\BrandImporter;
use App\Importers\Importer;

class ImportBrandsJob extends ImportJob
{
    protected function getImporter(string $path): Importer
    {
        return new BrandImporter($path);
    }
}
