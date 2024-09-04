<?php

namespace App\Livewire;

use App\Models\CalculateTool as CalculateToolModel;
use Livewire\Attributes\Computed;
use Livewire\Component;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class CalculateTool extends Component
{
    public string $currentList = "";

    public function render()
    {
        if (!$this->lists->contains($this->currentList)) {
            $this->currentList = "";
        }

        return view('livewire.calculate-tool');
    }

    #[Computed]
    public function lists()
    {
        $lists = CalculateToolModel::forUser()->distinct()->pluck("list_name");
        if (!$lists->contains(null)) $lists->prepend(null);
        return $lists;
    }

    #[Computed]
    public function products()
    {
        return CalculateToolModel::forUser()->list($this->currentList ?: null)->with('product.price')->get();
    }

    public function listCount($list)
    {
        return CalculateToolModel::forUser()->list($list ?: null)->count();
    }

    public function removeItem($id)
    {
        CalculateToolModel::forUser()
            ->where('product_id', $id)
            ->delete();
    }

    public function changeQuantity($productId, $quantity)
    {
        CalculateToolModel::forUser()->where("product_id", $productId)->update(["quantity" => $quantity]);
    }


    public function total()
    {
        $value = $this->rawTotal();
        return format_money($value);
    }

    public function export()
    {
        $products = $this->products;

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Ürün Adı');
        $sheet->setCellValue('B1', 'Stok Kodu');
        $sheet->setCellValue('C1', 'Üretici Kodu');
        $sheet->setCellValue('D1', 'Adet Fiyatı');
        $sheet->setCellValue('E1', 'Adet');
        $sheet->setCellValue('F1', 'Fiyat');

        $row = 2;
        foreach ($products as $model) {
            $product = $model->product;

            $priceBuilder = $product->price->builder()?->convertToTRY()->applyDiscount();
            if ($priceBuilder) continue;

            $quantity = $model->quantity;
            $unitPrice = $priceBuilder->asFloat();
            $price = $priceBuilder->multiply($quantity)->asFloat();

            $sheet->setCellValue('A' . $row, $product->title);
            $sheet->setCellValue('B' . $row, $product->sku);
            $sheet->setCellValue('C' . $row, $product->producercode);
            $sheet->setCellValue('D' . $row, $unitPrice);
            $sheet->setCellValue('E' . $row, $quantity);
            $sheet->setCellValue('F' . $row, $price);

            $row++;
        }

        $sheet->setCellValue('E' . $row, 'Toplam');
        $sheet->setCellValue('F' . $row, $this->rawTotal());

        $writer = new Xlsx($spreadsheet);
        return response()->streamDownload(
            fn() => $writer->save('php://output'),
            'export.xlsx'
        );
    }

    private function rawTotal()
    {
        return $this->products
            ->map(fn(CalculateToolModel $model) => $model->quantity * $model->product->price->sellingPrice()->asFloat())
            ->sum();
    }
}
