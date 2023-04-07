@extends('layouts.master')
@section('content')

    <div class="site__body">
        <div class="block-header block-header--has-breadcrumb block-header--has-title">
            <div class="container">
                <div class="block-header__body">
                    <h1 class="block-header__title">Markalar</h1>
                </div>
            </div>
        </div>
    <div class="block block-brands block-brands--layout--columns-8-full">
        <div class="container">
            <ul class="block-brands__list">
                @foreach(\App\Models\Brand::all() as $brand)
                    <li class="block-brands__item">
                        <a href="" class="block-brands__item-link">
                            <img src="images/brands/{{$brand->name}}.png" alt="">
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
