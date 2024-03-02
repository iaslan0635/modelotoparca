<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\ProductMerchantAttribute;
use Livewire\Component;

class ProductAttributeN11 extends Component
{
    public array $attribute;

    public int $product_id;

    public string $value;

    public int $value_id;

    public function render()
    {
        return view('livewire.admin.product-attribute-n11');
    }

    public function mount()
    {
        $sync = ProductMerchantAttribute::query()
            ->where('merchant', '=', 'n11')
            ->where('product_id', '=', $this->product_id)
            ->where('merchant_id', '=', $this->attribute['name'])
            ->first();

        if ($sync) {
            $this->value = $sync->merchant_value;
        }

        //        dd($this->value_id);
    }

    public function save()
    {
        Product::find($this->product_id)->merchantAttributes()->updateOrCreate([
            'merchant' => 'n11',
            'merchant_id' => $this->attribute['name'],
            'product_id' => $this->product_id,
        ], [
            'merchant_value' => $this->value,
        ]);
    }
}
