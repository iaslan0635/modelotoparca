@extends('layouts.master')
@section('content')
    <div class="site__body">
        <x-breadcrumb :parts="[
            ['name' => 'arama']
        ]" />
        <livewire:search-page />
    </div>

@endsection
