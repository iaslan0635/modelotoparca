<?php

namespace App\Importers;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

abstract class Importer
{
    protected Worksheet $sheet;
    /* @var ?callable */
    protected $statusHook;

    /** @return string[] */
    abstract public static function getUsedTables(): array;

    public function __construct(string $file, ?callable $statusHook = null)
    {
        $spreadsheet = (new Xlsx())->load($file);
        $this->sheet = $spreadsheet->getActiveSheet();
        $this->statusHook = $statusHook;
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

    protected function noop()
    {
        return function () {
        };
    }

    protected function status(int $i)
    {
        if ($this->statusHook) ($this->statusHook)($i);
    }

    public abstract function import();
}
