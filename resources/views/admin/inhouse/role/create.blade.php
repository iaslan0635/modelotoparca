@extends('admin.inhouse.layouts.card')
@section('card-title', "Yeni rol ekle")
@section('card-content')
    <form class="form" action="{{ route('admin.role.store') }}" method="post">
        @csrf
        @isset($role)
            <input type="hidden" name="id" value="{{ $role->id }}">
        @endisset
        <div class="fv-row mb-10">
            <label class="fs-5 fw-bold form-label mb-2">
                <span class="required">Rol ismi</span>
            </label>
            <input class="form-control form-control-solid" name="name" value="{{ isset($role) ? $role->name : '' }}" required/>
        </div>
        <div class="text-center pt-15">
            <button type="submit" class="btn btn-primary">
                <span class="indicator-label">Kaydet</span>
            </button>
        </div>
    </form>
@endsection
