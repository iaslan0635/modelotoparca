@extends('layouts.master')
@section('content')

    <div class="site__body">
        <x-breadcrumb :parts="[
            ['name' => 'Markalar']
        ]"/>
        <div class="block block-brands">
            <div class="container">
                <ul class="block-brands__list" style="justify-content: center; border: none">
                    @foreach($brands as $brand)
                        <li class="block-brands__item">
                            <a href="{{ route('brand.show', $brand) }}" class="block-brands__item-link brand-item">
                                <div class="brand-item-inner">
                                    <img src="{{ $brand->imageUrl() }}">
                                </div>
                                <span class="block-brands__item-name">{{$brand->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="block-space block-space--layout--divider-nl"></div>
    </div>
@endsection

@push("styles")
    <style>
        .brand-item {
            width: 150px;
            height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .brand-item-inner {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex: 1;
        }
    </style>
@endpush
