<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.wire-admin")]
class Reorder extends Component
{
    public function render()
    {
        $categories = Category::root()->orderBy('order')->get();
        return view('livewire.admin.category.reorder', compact('categories'));
    }

    public function reorder($ids)
    {
        $values = collect($ids)->map(fn($id, $index) => ["id" => $id, "order" => $index])->all();
        Category::upsert($values, ['id'], ['order']);
    }
}
