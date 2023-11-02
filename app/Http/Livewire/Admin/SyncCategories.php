<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Services\Merchants\N11;
use Livewire\Component;

class SyncCategories extends Component
{
    public Category $categories;
    public array $n11Categories;

    public function mount()
    {
        $n11 = new N11();
        $this->n11Categories = $n11->getCategories()->categoryList->category;
    }
    public function render()
    {
        return view('livewire.admin.sync-categories');
    }
}
