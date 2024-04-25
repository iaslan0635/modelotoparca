<?php

namespace App\View\Components;

use App\Models\Brand;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CategoryHeading extends Component
{
    public function __construct(public $category, public $brandIds)
    {
    }

    public function render(): View
    {
        $brands = Brand::query()->whereIn('id', $this->brandIds)->get();
        return view('components.category-heading', compact('brands'));
    }
}
