<?php

namespace App\Console\Commands;

use App\Importers\BrandImporter;
use App\Importers\Importer;

class ImportBrandCommand extends ImportCommand
{
    protected string $importVerb = 'brand';

    protected function getImporter(string $file, ?callable $statusHook): Importer
    {
        return new BrandImporter($file, $statusHook);
    }
}
