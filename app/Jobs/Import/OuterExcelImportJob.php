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
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

class OuterExcelImportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public $file, public bool $append)
    {
    }

    public function handle(): void
    {
        if (!$this->append) {
            $this->deactivateMissingProducts();
        }

        Excel::import(new ExcelImport, $this->file);
    }

    private function getProductIdsFromExcel(): array
    {
        $readFilter = new class implements IReadFilter {
            public function readCell($columnAddress, $row, $worksheetName = '')
            {
                return $columnAddress == 'B' && $row < 10;
            }
        };

        $path = storage_path("app/$this->file");

        $reader = IOFactory::createReaderForFile($path);
        $reader->setReadDataOnly(true);
        $reader->setReadFilter($readFilter);
        $spreadsheet = $reader->load($path);
        $worksheet = $spreadsheet->getActiveSheet();

        $highestRow = $worksheet->getHighestRow();
        $productIds = [];
        for ($row = 2; $row <= $highestRow; $row++) {
            $productIds[] = $worksheet->getCell("B$row")->getValue();
        }

        return $productIds;
    }

    private function deactivateMissingProducts(): void
    {
        $excelProductIds = $this->getProductIdsFromExcel();
        $databaseProductIds = Product::pluck('id')->toArray();

        $productIdsToDeactivate = array_diff($databaseProductIds, $excelProductIds);

        $productQuery = Product::whereIn('id', $productIdsToDeactivate);
        $productQuery->update(['status' => false]);
        $productQuery->unsearchable();

        $tigerProductQuery = TigerProduct::whereIn('id', $productIdsToDeactivate);
        $tigerProductQuery->update(['active' => 1]);
    }
}
