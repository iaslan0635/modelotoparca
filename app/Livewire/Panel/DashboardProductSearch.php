<?php

namespace App\Livewire\Panel;

use Livewire\Component;
use App\Models\Product;

class DashboardProductSearch extends Component
{
//    public $search = '';
//    public $products = [];

    public string $tab = 'general';
    public string $search = '';
    public $products = [];


    public function search()
    {
        $query = trim($this->search);

        if ($this->tab === 'logical') {
            $this->products = Product::where('id', $query)->get();
            return;
        }

        if ($this->tab === 'general') {
            $this->products = Product::where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                    ->orWhere('sub_title', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%")
                    ->orWhere('sku', 'like', "%{$query}%")
                    ->orWhere('part_number', 'like', "%{$query}%")
                    ->orWhere('producercode', 'like', "%{$query}%")
                    ->orWhere('cross_code', 'like', "%{$query}%")
                    ->orWhere('oem_codes', 'like', "%{$query}%")
                    ->orWhere('producercode2', 'like', "%{$query}%")
                    ->orWhere('abk', 'like', "%{$query}%")
                    ->orWhere('similar_product_codes', 'like', "%{$query}%")
                    ->orWhere('producer_unbranded', 'like', "%{$query}%")
                    ->orWhere('cross_code_regexed', 'like', "%{$query}%")
                    ->orWhere('producercode_regexed', 'like', "%{$query}%")
                    ->orWhere('producercode2_regexed', 'like', "%{$query}%")
                    ->orWhere('similar_product_codes_regexed', 'like', "%{$query}%")
                    ->orWhere('oem_codes_regexed', 'like', "%{$query}%")
                    ->orWhere('oem_codes_unspaced', 'like', "%{$query}%")
                    ->orWhere('hidden_searchable', 'like', "%{$query}%")
                    ->orWhere('tecdoc', 'like', "%{$query}%");
            })->limit(30)->get();
        }
    }




    public function render()
    {
        return view('livewire.panel.dashboard-product-search');
    }

}
