@extends('layouts.master')
@section('content')

    <div class="site__body">
        <x-breadcrumb :parts="[
            ['name' => 'Markalar']
        ]" />
    <div class="block block-brands block-brands--layout--columns-8-full">
        <div class="container">
            <ul class="block-brands__list">
                @foreach($brands as $brand)
                    <li class="block-brands__item">
                        <a href="{{ route('brand.show', $brand) }}" class="block-brands__item-link">
                            <img src="{{ $brand->imageUrl() }}" alt="">
                            <span class="block-brands__item-name">{{$brand->name}}</span>
                        </a>
                    </li>
                    <li class="block-brands__divider" role="presentation"></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="block-space block-space--layout--divider-nl"></div>
    </div>
@endsection
