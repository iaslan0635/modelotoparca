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
        $attribute = $this->attribute;
        $name = $attribute?->name ?? $attribute['name'];
        $isMandatory = $attribute['mandatory'];
        $isText = ! array_key_exists('valueList', $attribute);
        $getIterator = fn () => get_item($attribute['valueList'], 'value');
        $getOptionValue = fn ($value) => get_item($value, 'name');
        $getOptionText = fn ($value) => get_item($value, 'name');

        return view('livewire.admin.product-attribute', compact('name', 'isMandatory', 'isText', 'getIterator', 'getOptionValue', 'getOptionText', 'attribute'));
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
