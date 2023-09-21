<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\Import\AppendImportTigerJob;
use App\Jobs\Import\ImportAlternativeJob;
use App\Jobs\Import\ImportFilterJob;
use App\Jobs\Import\OuterExcelImportJob;

class ImportController extends Controller
{
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
        dispatch(new OuterExcelImportJob($this->storeFile(), false));
    }

    public function ITEMS_WEB__APPEND()
    {
        dispatch(new OuterExcelImportJob($this->storeFile(), true));
    }

    public function ITEMSUBS()
    {
        ImportAlternativeJob::dispatch($this->storeFile());
    }

    public function FILTER_OIL()
    {
        ImportFilterJob::dispatch($this->storeFile());
    }

    public function ITMCLSAS()
    {
        abort(500, "Not imlemented");
    }
}
