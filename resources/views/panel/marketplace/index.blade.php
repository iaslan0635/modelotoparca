@extends('layouts.panel-app')

@section('content')
    <h1 class="mb-4">Pazaryeri Hesabı Ekle</h1>

    @livewire('panel.marketplace-account-form')

    @livewire('panel.marketplace-account-list')

@endsection

