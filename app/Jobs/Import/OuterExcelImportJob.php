<?php

namespace App\Jobs\Import;

use App\Importers\ExcelImport;
use App\Models\Product;
use App\Models\TigerProduct;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;

class OuterExcelImportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public $file, public bool $append)
    {
    }

    public function handle(): void
    {
        // TODO: find out what products deactivated ahead of time and update elastic index accordingly

        if (! $this->append) {
            Product::query()->update(['status' => false]);
            TigerProduct::query()->update(['active' => 1]);
        }

        Excel::import(new ExcelImport, $this->file);
    }
}
