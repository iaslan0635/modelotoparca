@extends('layouts.master')
@section('content')

    <!-- site__body -->
    <div class="site__body">
        <x-breadcrumb :parts="[
            ['name' => 'Tüm Kategoriler']
        ]" />
        <div class="block block-split">
            <div class="container wide-container">
                <x-car-selection />
                <div class="block-split__row row no-gutters fixed-sidebar">
                    <div class="block-split__item block-split__item-content col-auto">
                        <div class="block">
                            <div class="categories-list categories-list--layout--columns-4-full">
                                <ul class="categories-list__body">
                                    @foreach(\App\Models\Category::where('parent_id',null)->orderBy("name")->get() as $root)
                                    @if($root->deepProductsCount == 0) @continue @endif
                                    <li class="categories-list__item">
                                        <a href="{{ route('category.show', $root) }}">
                                            <div class="image image--type--category">
                                                <div class="image__body">
                                                    <img class="image__tag" src="{{ $root->imageUrl() }}" alt="">
                                                </div>
                                            </div>
                                            <div class="categories-list__item-name">{{ $root->name }}</div>
                                        </a>
                                        <div class="categories-list__item-products">{{ $root->deepProductsCount }} Ürün</div>
                                    </li>
                                    <li class="categories-list__divider"></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="block-space block-space--layout--divider-nl"></div>
                    </div>
                </div>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
        </div>
    </div>
    <!-- site__body / end -->

@endsection
