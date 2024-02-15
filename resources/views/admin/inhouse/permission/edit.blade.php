@extends('admin.inhouse.layouts.card')
@section('card-title', "$employee->full_name adlı kullanıcının izinlerini düzenle")
@section('card-content')
    <livewire:admin.permission-editor :model="$employee"/>
@endsection
