@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--divider-xs"></div>
        <x-breadcrumb :parts="[
            ['name' => 'Hesaplama Aracı']
        ]" />
        <div class="block">
            <div class="container">
                <livewire:calculate-tool />
            </div>
        </div>
    </div>
    <!-- site__body / end -->
@endsection
