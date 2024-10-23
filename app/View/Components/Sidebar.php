<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public function render()
    {
        $productCountThreshold = 0;
        $categories = Category::root()
            ->with(
                'children',
                fn($query) => $query->where("hide_in_sidebar", false)
                    ->with(
                        'children',
                        fn($query) => $query->where("hide_in_sidebar", false)
                            ->with(
                                'children',
                                fn($query) => $query->where("hide_in_sidebar", false)
                                    ->whereHas('products', fn($q) => $q->havingRaw('COUNT(*) > ?', [$productCountThreshold]))
                            )
                            ->whereHas('products', fn($q) => $q->havingRaw('COUNT(*) > ?', [$productCountThreshold]))
                    )
                    ->whereHas('products', fn($q) => $q->havingRaw('COUNT(*) > ?', [$productCountThreshold]))
            )
            ->where("hide_in_sidebar", false)
            ->whereHas('products', fn($query) => $query->havingRaw('COUNT(*) > ?', [$productCountThreshold]))
            ->get();

        return view('components.sidebar', ['categories' => $categories]);
        Cache::forget("category-sidebar-view");
        return Cache::rememberForever(
            'category-sidebar-view',
            fn() => view('components.sidebar', ['categories' => $categories])->render()
        );
    }
}
