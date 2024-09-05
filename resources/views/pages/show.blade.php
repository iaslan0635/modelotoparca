@extends('layouts.master')
@section('title', $page->title)
@push('styles')
    <meta name="description" content="{{ $page->description }}">
    <meta name="keywords" content="{{ $page->keywords }}">
@endpush
@section('content')
    <div class="site__body">
        <div class="block-space block-space--layout--divider-xs"></div>
        <x-breadcrumb :parts="[
            ['name' => $page->title]
        ]" />
        <div class="block">
            <div class="container">
                <div class="document">
                    <div class="document__header">
                        <h1 class="document__title">{{ $page->title }}</h1>
                        <div class="document__subtitle">{{ $page->description }}</div>
                    </div>
                    <div class="document__content card">
                        <div class="typography">
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
