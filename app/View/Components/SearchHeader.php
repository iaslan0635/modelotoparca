<?php

namespace App\View\Components;

use App\Models\Brand;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $brandIds)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $brands = Brand::query()->whereIn('id', $this->brandIds)->get();
        return view('components.search-header', compact('brands'));
    }
}
