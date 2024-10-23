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
                    ->withCount('products') // products sayısını al
                    ->with(
                        'children',
                        fn($query) => $query->where("hide_in_sidebar", false)
                            ->withCount('products') // iç children için de sayıyı al
                            ->with(
                                'children',
                                fn($query) => $query->where("hide_in_sidebar", false)
                                    ->withCount('products') // iç iç children için de sayıyı al
                            )
                    )
            )
            ->where("hide_in_sidebar", false)
            ->get();

        $categories = $categories->filter(function ($category) use ($productCountThreshold) {
            return $category->children->filter(fn($child) => $child->products_count > $productCountThreshold)->isNotEmpty();
        });

        foreach ($categories as $category) {
            $category->children = $category->children->filter(function ($child) use ($productCountThreshold) {
                return $child->products_count > $productCountThreshold;
            });
        }

        return view('components.sidebar', ['categories' => $categories]);
        Cache::forget("category-sidebar-view");
        return Cache::rememberForever(
            'category-sidebar-view',
            fn() => view('components.sidebar', ['categories' => $categories])->render()
        );
    }
}
