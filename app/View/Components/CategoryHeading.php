<?php

namespace App\View\Components;

use App\Models\Brand;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

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
