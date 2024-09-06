<?php

namespace App\Livewire\Admin\Order;

use App\Http\Controllers\Admin\ProductController;
use App\Livewire\Forms\OrderEditForm;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class Edit extends Component
{
    public Order $order;
    public OrderEditForm $form;
    public string $search = '';
    public bool $addMode = false;

    public function mount(Order $order)
    {
        $this->order = $order;
        $this->form->setOrder($order);
    }

    public function render()
    {
        $items = $this->order->items()->with("product")->get(["product_data", "quantity", "price"]);

        $searchResults = $this->search && strlen($this->search) > 3
            ? ProductController::searchProducts($this->search)->get()
            : [];

        return view('livewire.admin.order.edit', compact('items', 'searchResults'));
    }

    public function addProduct(int $id)
    {
        $product = Product::findOrFail($id);

        $this->order->items()->create([
            'product_id' => $product->id,
            'tax_id' => $product->price->tax?->id,
            'price' => $product->price?->sellingPrice()->asFloat(),
            'quantity' => 1,
            'product_data' => $product,
            'tax_data' => $product->price->tax,
            'price_data' => $product->price,
        ]);
    }
}
