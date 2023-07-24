<?php

namespace App\Jobs\Import;

use App\Importers\Importer;
use App\Importers\TigerImporter;

class AppendImportTigerJob extends ImportJob
{
    protected function getImporter(string $path): Importer
    {
        return new TigerImporter($path, true);
    }
}
