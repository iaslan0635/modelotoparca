<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ProductFilters extends Component
{
    public ?Collection $categories;
    public Collection $brands;

    public ?int $selectedCategory = null;
    public mixed $selectedBrand = null;

    public function render()
    {
        return view('livewire.product-filters');
    }
}
