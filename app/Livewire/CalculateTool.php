<?php

namespace App\Livewire;

use App\Models\CalculateTool as CalculateToolModel;
use Livewire\Component;

class CalculateTool extends Component
{
    public function render()
    {
        $products = CalculateToolModel::forUser()->with('product.price')->get();
        return view('livewire.calculate-tool', compact("products"));
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
        $value = CalculateToolModel::forUser()->with("product.price")->get()
            ->map(fn (CalculateToolModel $model) => $model->quantity * $model->product->price->sellingPrice()->asFloat())
            ->sum();

        return format_money($value);
    }
}
