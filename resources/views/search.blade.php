@extends('layouts.master')
@section('content')
    <div class="site__body">
        <x-breadcrumb :parts="[
            ['name' => 'Arama'],
            ['name' => \Str::limit(\request()->input('query'), 20)]
        ]" />
        <livewire:search-page />
    </div>

@endsection
