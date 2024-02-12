@extends('admin.inhouse.layouts.card')
@section('card-title', 'İzin Düzenle')
@section('card-content')
    <livewire:admin.permission-editor :employee="$employee"/>
@endsection
