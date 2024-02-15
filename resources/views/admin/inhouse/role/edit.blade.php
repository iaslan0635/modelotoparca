@extends('admin.inhouse.layouts.card')
@section('card-title', "$role->name adlı rolün izinlerini düzenle")
@section('card-content')
    <livewire:admin.permission-editor :model="$role"/>
@endsection
