<?php

namespace App\Console\Commands;

use App\Importers\TigerImporter;
use Illuminate\Console\Command;

class ImportTigerCommand extends Command
{
    protected $signature = 'import:tiger {file}';

    public function handle(): void
    {
        $file = $this->argument("file");
        $importer = new TigerImporter($file);
        $progress = $this->output->createProgressBar($importer->getRowCount());
        $progress->start();
        $importer->import($progress->setProgress(...));
    }
}
