@extends('layouts.master')
@section('content')
    <x-breadcrumb :parts="[
            ['name' => 'Araç üreticileri']
        ]" />
    <div class="block block-split">
        <div class="container">
            <div class="block-split__row justify-content-center row no-gutters">
                <div class="block-split__item block-split__item-content col-12">
                    <livewire:select-car/>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
    </div>
@endsection
