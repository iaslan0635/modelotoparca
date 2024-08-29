<x-product-list
    :products="$products"
    :filtered-properties="$property"
    :properties="$allProperties"
    :category="$category"
    :brands-array="$brandsArray"
    :brands="$brands"
    :min_price="$min_price"
    :max_price="$max_price"
    :filter-categories="$filterCategories"
>
    <x-slot:breadcrumb>
        <x-breadcrumb :parts="[
            ['name' => 'Kategoriler', 'link' => route('category.index')],
            ['name' => $category->name],
        ]"/>
    </x-slot:breadcrumb>
</x-product-list>
