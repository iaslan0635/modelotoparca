@extends('layouts.master')
@section('content')

    <!-- site__body -->
    <div class="site__body">
        <div class="block-header block-header--has-breadcrumb block-header--has-title">
            <div class="container">
                <div class="block-header__body">
                    <h1 class="block-header__title">Tüm Kategoriler</h1>
                </div>
            </div>
        </div>
        <div class="block block-split">
            <div class="container">
                <div class="block-split__row row no-gutters">
                    <div class="block-split__item block-split__item-content col-auto">
                        <div class="block">
                            <div class="categories-list categories-list--layout--columns-4-full">
                                <ul class="categories-list__body">
                                    @foreach($__Categories as $root)

                                    <li class="categories-list__item">
                                        <a href="{{ route('category.show', $root) }}">
                                            <div class="image image--type--category">
                                                <div class="image__body">
                                                    <img class="image__tag" src="images/categories/{{ $root->slug }}.png" alt="">
                                                </div>
                                            </div>
                                            <div class="categories-list__item-name">{{ $root->name }}</div>
                                        </a>
{{--                                        <div class="categories-list__item-products">131 Products</div>--}}
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
