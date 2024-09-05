<?php

namespace App\Importers;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

/**
 * Abstract class Importer
 *
 * Provides a base class for importing data from an Excel file.
 */
abstract class Importer
{
    /** @var Worksheet The worksheet object representing the active sheet in the Excel file. */
    protected Worksheet $sheet;

    /** @var ?callable A callable function to report status updates. */
    protected $statusHook;

    /**
     * Get the list of tables used by the importer.
     *
     * @return string[] An array of table names.
     */
    abstract public static function getUsedTables(): array;

    /**
     * Constructor
     *
     * @param string $file The path to the Excel file to be imported.
     * @param callable|null $statusHook A callable function to report status updates.
     */
    public function __construct(string $file, callable $statusHook = null)
    {
        $spreadsheet = (new Xlsx())->load($file);
        $this->sheet = $spreadsheet->getActiveSheet();
        $this->statusHook = $statusHook;
    }

    /**
     * Get the number of rows in the active sheet.
     *
     * @return int The number of rows.
     */
    public function getRowCount(): int
    {
        return $this->sheet->getHighestRow();
    }

    /**
     * Remove an element from an array and return its value.
     *
     * @param array $array The array to modify.
     * @param string $key The key of the element to remove.
     * @return mixed The value of the removed element.
     */
    protected function pop(array &$array, string $key)
    {
        $value = $array[$key];
        unset($array[$key]);

        return $value;
    }

    /**
     * Create a function to get the value of a cell in a specific row.
     *
     * @param int $row The row number.
     * @return callable A function that takes a column letter and returns the cell value.
     */
    protected function makeCellGetter(int $row)
    {
        return function ($column) use ($row) {
            $value = $this->sheet->getCell("$column$row")->getValue();

            return $value instanceof RichText ? $value->getPlainText() : $value;
        };
    }

    /**
     * Create a no-operation function.
     *
     * @return callable A function that does nothing.
     */
    protected function noop()
    {
        return function () {
        };
    }

    /**
     * Report the current status using the status hook.
     *
     * @param int $i The current status value.
     */
    protected function status(int $i)
    {
        if ($this->statusHook) {
            ($this->statusHook)($i);
        }
    }

    /**
     * Import data from the Excel file.
     *
     * This method must be implemented by subclasses.
     */
    abstract public function import();
}
