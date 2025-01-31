@extends("layouts.master")
@section("content")
<h2 class="text-center mb-4">Yedek Parça Kategorileri</h2>
<x-category-grid :categories="$filterCategories" />

<div class="mt-5">
    <x-product-list :products="$query->clone()->paginate(10)" :filter-categories="collect([])" :filter-show="false">
    </x-product-list>
</div>
@endsection
