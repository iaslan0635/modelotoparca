<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\ProductMerchantAttribute;
use App\Services\Merchants\Hepsiburada;
use Livewire\Component;

class ProductAttributeHepsiburada extends Component
{
    public array $attribute;
    public int $product_id;
    public string $value;
    public $value_id;
    public array $values = [];

    public function render()
    {
        return view('livewire.admin.product-attribute-hepsiburada');
    }

    public function mount()
    {
        $sync = ProductMerchantAttribute::query()
            ->where('merchant', '=', "hepsiburada")
            ->where('product_id', '=', $this->product_id)
            ->where('merchant_id', '=', $this->attribute['id'])
            ->first();

        if ($sync) {
            $this->value = $sync->merchant_value;
            $this->value_id = $sync->merchant_value;
        }
    }

    public function loadData()
    {
        $hb = new Hepsiburada();
        $this->values = $hb->getCategoryAttributeValues(Product::find($this->product_id)->categories[0]->merchants()->hepsiburada()->first()->merchant_id, dd($this->attribute['id']))->data ?? [];
    }

    public function save()
    {
        Product::find($this->product_id)->merchantAttributes()->updateOrCreate([
            'merchant' => "hepsiburada",
            'merchant_id' => $this->attribute['id'],
            'product_id' => $this->product_id,
        ], [
            "merchant_value" => $this->attribute['type'] === "string" ? $this->value : $this->value_id
        ]);
    }
}
