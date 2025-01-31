@extends("layouts.master")
@section("content")
<x-category-grid :categories="$filterCategories" />

<div class="mt-5">
    <x-product-list :products="$query->clone()->paginate(10)" :filter-categories="collect([])" :filter-show="false">
    </x-product-list>
</div>
@endsection
