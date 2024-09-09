<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public function render(): View
    {
        $categories = Category::root()->where("hide_in_sidebar", false)
            ->with('children', function ($query) {
                $query->where("hide_in_sidebar", false);
            })
            ->get();

        return view('components.sidebar', compact('categories'));
    }
}
