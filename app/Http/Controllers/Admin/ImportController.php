<?php

namespace App\Http\Controllers\Admin;

use App\Bots\SparetoBot;
use App\Console\Commands\RunSparetoBotCommand;
use App\Http\Controllers\Controller;
use App\Jobs\Import\AppendImportTigerJob;
use App\Jobs\Import\ImportAlternativeJob;
use App\Jobs\Import\ImportFilterJob;
use App\Jobs\Import\OuterExcelImportJob;
use App\Jobs\SparetoConnectJob;
use Illuminate\Support\Facades\Redis;

class ImportController extends Controller
{
    protected const QUEUE = "import";

    public function index()
    {
        return view("admin.import.index", ["routes" => ["ITEMS_WEB", "ITEMS_WEB__APPEND", "ITEMSUBS", "ITMCLSAS", "FILTER_OIL"]]);
    }

    protected function storeFile(): string
    {
        $filePath = request()->file("file")?->store("import");
        abort_unless($filePath, 400, "Dosya yüklenemedi");
        return $filePath;
    }

    public function ITEMS_WEB()
    {
        OuterExcelImportJob::dispatch($this->storeFile())->onQueue(self::QUEUE);
    }

    public function ITEMS_WEB__APPEND()
    {
        AppendImportTigerJob::dispatch($this->storeFile())->onQueue(self::QUEUE);
    }

    public function ITEMSUBS()
    {
        ImportAlternativeJob::dispatch($this->storeFile())->onQueue(self::QUEUE);
    }

    public function FILTER_OIL()
    {
        ImportFilterJob::dispatch($this->storeFile())->onQueue(self::QUEUE);
    }

    public function ITMCLSAS()
    {
        abort(500, "Not imlemented");
    }

    public function sparetobot_bot()
    {
        \Artisan::call("spareto:bot");
        return back();
    }

    public function sparetobot_connect()
    {
        \Artisan::call("spareto:connect", ["batch-id" => \request()->get("batch-id")]);
        return back();
    }

    public function track_ITEMS_WEB()
    {
        return [
            "current" => Redis::get("tiger_import:progress"),
            "max" => Redis::get("tiger_import:progress_max"),
        ];
    }
}
