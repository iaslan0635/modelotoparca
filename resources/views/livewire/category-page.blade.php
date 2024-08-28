<x-product-list :products="$products" :filtered-properties="$property" :properties="$allProperties" :category="$category" :brands-array="$brandsArray" :brands="$brands"
                :filter-categories="$category->children->unique('name')->sortBy('name')">
    <x-slot:breadcrumb>
        <x-breadcrumb :parts="[
            ['name' => 'Kategoriler', 'link' => route('category.index')],
            ['name' => $category->name],
            ['name' => 'f: ' . $filters]
        ]"/>
    </x-slot:breadcrumb>
</x-product-list>
