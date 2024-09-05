<?php

namespace App\Jobs\Import;

use App\Importers\CategoryImporter;
use App\Importers\Importer;

class ImportCategoryJob extends ImportJob
{

    protected function getImporter(string $path): Importer
    {
        return new CategoryImporter($path);
    }
}
