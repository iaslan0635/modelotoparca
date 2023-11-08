<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductAttributeTrendyol extends Component
{
    public array $attribute;
    public int $product_id;
    public string $value;
    public int $value_id;

    public function render()
    {
        return view('livewire.admin.product-attribute-trendyol');
    }

    public function save()
    {
        Product::find($this->product_id)->merchantAttributes()->create([
            'merchant' => "trendyol",
            'merchant_id' => $this->attribute['attribute']['id'],
            'product_id' => $this->product_id,
            $this->attribute['allowCustom'] ? "merchant_value" : "merchant_value_id" => $this->attribute['allowCustom'] ? $this->value : $this->value_id
        ]);
    }
}
