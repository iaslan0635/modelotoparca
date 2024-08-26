<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Livewire\Component;

class ProductFilters extends Component
{
    public ?EloquentCollection $categories;
    public Collection $brands;

    public ?int $selectedCategory = null;
    public Collection $selectedBrands;

    public function mount(EloquentCollection $categories, Collection $brands)
    {
        $this->categories = $categories;
        $this->brands = collect($brands);
        $this->selectedBrands = collect();
    }

    public function render()
    {
        return view('livewire.product-filters');
    }

    public function resetSelectedBrands()
    {
        $this->selectedBrands = collect();
    }
}
