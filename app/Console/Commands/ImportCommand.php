<?php

namespace App\Console\Commands;

use App\Importers\Importer;
use Illuminate\Console\Command;

abstract class ImportCommand extends Command
{
    protected string $importVerb;

    public function __construct()
    {
        if (empty($this->importVerb)) throw new \Exception('$importVerb must be set');
        $this->signature = "import:$this->importVerb {file}";
        parent::__construct();
    }

    protected abstract function getImporter(string $file): Importer;

    public function handle(): void
    {
        $file = $this->argument("file");
        $importer = $this->getImporter($file);
        $progress = $this->output->createProgressBar($importer->getRowCount());
        $progress->start();
        $importer->import($progress->setProgress(...));
    }
}
