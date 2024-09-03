<?php

namespace App\Livewire;

use App\Models\CalculateTool as CalculateToolModel;
use Livewire\Attributes\Computed;
use Livewire\Component;

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
        return CalculateToolModel::forUser()->distinct()->pluck("list_name");
    }

    #[Computed]
    public function products()
    {
        return CalculateToolModel::forUser()->list($this->currentList ?: null)->with('product.price')->get();
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
        $value = $this->products
            ->map(fn(CalculateToolModel $model) => $model->quantity * $model->product->price->sellingPrice()->asFloat())
            ->sum();

        return format_money($value);
    }
}
