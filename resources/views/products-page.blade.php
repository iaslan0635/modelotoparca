@extends("layouts.master")
@section("content")
    <x-product-list
        :products="$products"
    />
@endsection
