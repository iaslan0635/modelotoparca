<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class SyncCategorySingle extends Component
{
    public Category $category;

    public $n11Categories;

    public $hepsiCategories;

    public $trendyolCategories;

    public $n11_id;

    public $hepsiburada_id;

    public $trendyol_id;

    public function render()
    {
        return view('livewire.admin.sync-category-single');
    }

    public function addN11()
    {
        $this->category->merchants()->create([
            'merchant' => 'n11',
            'merchant_id' => $this->n11_id,
            'category_id' => $this->category->id,
        ]);
    }

    public function addHepsiburada()
    {
        $this->category->merchants()->create([
            'merchant' => 'hepsiburada',
            'merchant_id' => $this->hepsiburada_id,
            'category_id' => $this->category->id,
        ]);
    }

    public function addTrendyol()
    {
        $this->category->merchants()->create([
            'merchant' => 'trendyol',
            'merchant_id' => $this->trendyol_id,
            'category_id' => $this->category->id,
        ]);
    }
}
