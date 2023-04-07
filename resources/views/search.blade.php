@extends('layouts.master')
@section('content')
    <div class="site__body">
        <div class="block-header block-header--has-breadcrumb block-header--has-title">
            <div class="container">
                <div class="block-header__body">
                    <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                        <ol class="breadcrumb__list">
                            <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                            <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first">
                                <a href="index.html" class="breadcrumb__item-link">Anasayfa</a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--parent">
                                <a href="" class="breadcrumb__item-link">Kategoriler</a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last"
                                aria-current="page">
                                <span class="breadcrumb__item-link">Kategori Sayfası</span>
                            </li>
                            <li class="breadcrumb__title-safe-area" role="presentation"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <livewire:search-page />
    </div>

@endsection
