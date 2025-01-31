@extends("layouts.master")
@section("content")
<x-product-list :products="$query->clone()->paginate(10)" :filter-categories="collect([])" :filterShow="false">
</x-product-list>
@endsection
