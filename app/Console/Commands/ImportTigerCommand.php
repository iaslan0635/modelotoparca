<?php

namespace App\Console\Commands;

use App\Importers\Importer;
use App\Importers\TigerImporter;
use Illuminate\Support\Facades\Redis;

class ImportTigerCommand extends ImportCommand
{
    protected string $importVerb = "tiger";

    protected function getImporter(string $file, ?callable $statusHook): Importer
    {
        $trackingHook = function (int $i) {
            Redis::set("tiger_import:progress", $i);
        };

        $importer = new TigerImporter($file,
            !$statusHook ? $trackingHook :
                function (int $i) use ($trackingHook, $statusHook) {
                    $trackingHook($i);
                    $statusHook($i);
                }
        );

        Redis::set("tiger_import:progress_max", $importer->getRowCount());

        return $importer;
    }
}
