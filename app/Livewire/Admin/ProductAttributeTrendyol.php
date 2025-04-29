<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use App\Models\ProductMerchantAttribute;
use Livewire\Component;

class ProductAttributeTrendyol extends Component
{
    public array $attribute;

    public int $product_id;

    public string $value = '';

    public int $value_id = 0;

    public function mount()
    {
        $sync = ProductMerchantAttribute::query()
            ->where('merchant', '=', 'trendyol')
            ->where('product_id', '=', $this->product_id)
            ->where('merchant_id', '=', $this->attribute['attribute']->id)
            ->first();

        if ($sync) {
            if (!is_null($sync->merchant_value_id)) {
                $this->value_id = $sync->merchant_value_id;
            } else {
                $this->value = $sync->merchant_value;
            }
        }

        //        dd($this->value_id);
    }

    public function render()
    {
        $attribute = $this->attribute;
        $name = $attribute['attribute']?->name ?? $attribute['attribute']['name'];
        $isMandatory = $attribute['required'];
        $isText = $attribute['allowCustom'];
        $getIterator = fn() => $attribute['attributeValues'];
        $getOptionValue = fn($value) => $value?->id ?? $value['id'];
        $getOptionText = fn($value) => $value?->name ?? $value['name'];

        return view('livewire.admin.product-attribute', compact('name', 'isMandatory', 'isText', 'getIterator', 'getOptionValue', 'getOptionText', 'attribute'));
    }

    public function save()
    {
        //dd($this->attribute);
        Product::find($this->product_id)->merchantAttributes()->updateOrCreate([
            'merchant' => 'trendyol',
            'merchant_id' => $this->attribute['attribute']->id,
            'product_id' => $this->product_id,
        ], [
            $this->attribute['allowCustom'] ? 'merchant_value' : 'merchant_value_id' => $this->attribute['allowCustom'] ? $this->value : $this->value_id,
        ]);
    }
}
