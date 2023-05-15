<?php

namespace App\Importers;

use Illuminate\Support\Facades\App;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

abstract class Importer
{
    protected Worksheet $sheet;

    /** @return string[] */
    abstract public static function getUsedTables(): array;

    public function __construct(string $file)
    {
        $spreadsheet = (new Xlsx())->load($file);
        $this->sheet = $spreadsheet->getActiveSheet();
    }

    public function getRowCount(): int
    {
        return $this->sheet->getHighestRow();
    }

    protected function pop(array &$array, string $key)
    {
        $value = $array[$key];
        unset($array[$key]);
        return $value;
    }

    protected function makeCellGetter(int $row)
    {
        return function ($column) use ($row) {
            $value = $this->sheet->getCell("$column$row")->getValue();
            return $value instanceof RichText ? $value->getPlainText() : $value;
        };
    }

    protected function shouldAddToIndex()
    {
        return App::isProduction();
    }

    protected function noop()
    {
        return function () {
        };
    }

    public abstract function import(callable|null $statusHook = null);
}
