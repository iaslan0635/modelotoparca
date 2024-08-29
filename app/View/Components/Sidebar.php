<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public function render(): View
    {
        $categories = Category::root()->get();

        return view('components.sidebar', compact('categories'));
    }
}
