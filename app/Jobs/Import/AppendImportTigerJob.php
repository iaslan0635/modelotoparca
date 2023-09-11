<?php

namespace App\Jobs\Import;

use App\Importers\Importer;
use App\Importers\TigerImportMapper;

class AppendImportTigerJob extends ImportJob
{
    protected function getImporter(string $path): Importer
    {
        return new TigerImportMapper($path, true);
    }
}
