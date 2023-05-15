<?php

namespace App\Console\Commands;

use App\Importers\Importer;
use Illuminate\Console\Command;
use Illuminate\Console\View\Components\Info;
use Illuminate\Support\Facades\DB;

abstract class ImportCommand extends Command
{
    protected string $importVerb;

    public function __construct()
    {
        if (empty($this->importVerb)) throw new \Exception('$importVerb must be set');
        $this->signature = "import:$this->importVerb {file} {--truncate}";
        parent::__construct();
    }

    protected abstract function getImporter(string $file): Importer;

    public function handle(): void
    {
        $truncate = $this->option("truncate") && $this->confirm("Truncate all tables to be exported?");

        $file = $this->argument("file");
        $importer = $this->getImporter($file);

        if ($truncate) {
            $info = new Info($this->output);
            $tablesToTruncate = $importer::getUsedTables();
            foreach ($tablesToTruncate as $table) {
                DB::table($table)->truncate();
                $info->render("Truncated $table");
            }
        }

        $progress = $this->output->createProgressBar($importer->getRowCount());
        $progress->start();
        $importer->import($progress->setProgress(...));
    }
}
