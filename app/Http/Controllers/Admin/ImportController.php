<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\Import\ImportAlternativeJob;
use App\Jobs\Import\ImportBrandsJob;
use App\Jobs\Import\ImportCategoryJob;
use App\Jobs\Import\ImportFilterJob;
use App\Jobs\Import\OuterExcelImportJob;
use App\Jobs\RerunBotForMissingProductsJob;

class ImportController extends Controller
{
    public function index()
    {
        return view('admin.import.index', [
            'routes' => ['ITEMS_WEB', 'ITEMS_WEB_EK', 'ITEMSUBS', 'KATEGORILER', 'FILTER_OIL', 'MARKALAR'],
            'notes' => [
                'KATEGORILER' => "Şimdilik sadece LOGICALREF (A), NAME (E) ve DOMINANTREFS5 (H) sütunları içe aktarılıyor.",
            ]
        ]);
    }

    protected function storeFile(): string
    {
        $filePath = request()->file('file')?->store('import');
        abort_unless($filePath, 400, 'Dosya yüklenemedi');

        return $filePath;
    }

    public function ITEMS_WEB()
    {
        OuterExcelImportJob::dispatch($this->storeFile(), false);
    }

    public function ITEMS_WEB_EK()
    {
        OuterExcelImportJob::dispatch($this->storeFile(), true);
    }

    public function ITEMSUBS()
    {
        ImportAlternativeJob::dispatch($this->storeFile());
    }

    public function MARKALAR()
    {
        ImportBrandsJob::dispatch($this->storeFile());
    }

    public function FILTER_OIL()
    {
        ImportFilterJob::dispatch($this->storeFile());
    }

    public function KATEGORILER()
    {
        ImportCategoryJob::dispatch($this->storeFile());
    }

    public function rerunMissingProducts()
    {
        RerunBotForMissingProductsJob::dispatch();

        return back();
    }
}
