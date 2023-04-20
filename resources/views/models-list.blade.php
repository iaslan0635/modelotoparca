@extends('layouts.master')
@section('content')
    <div class="block-header block-header--has-breadcrumb block-header--has-title">
        <div class="container">
            <div class="block-header__body">
                <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb__list">
                        <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                        <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first">
                            <a href="index.html" class="breadcrumb__item-link">Home</a>
                        </li>
                        <li class="breadcrumb__item breadcrumb__item--parent">
                            <a href="" class="breadcrumb__item-link">Breadcrumb</a>
                        </li>
                        <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last"
                            aria-current="page">
                            <span class="breadcrumb__item-link">Current Page</span>
                        </li>
                        <li class="breadcrumb__title-safe-area" role="presentation"></li>
                    </ol>
                </nav>

            </div>
        </div>
    </div>
    <div class="block block-split">
        <div class="container">
            <div class="block-split__row row no-gutters">
                <div class="block-split__item block-split__item-content col-auto">
                    <livewire:select-car/>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
    </div>
@endsection
