@extends("admin.inhouse.layouts.card")
@php $editing = isset($employee) @endphp
@section("card-title", $editing ? "$employee->full_name adlı kullanıcıyı düzenle" : "Yeni kullanıcı ekle")
@php $passwordRequired = $editing ? "" : "required" @endphp
@section("card-content")
    <form class="form" action="{{ $editing ? route("admin.employee.update", $employee) : route('admin.employee.store') }}" method="post">
        @csrf
        @if($editing) @method('PUT') @endif
        <div class="fv-row mb-7">
            <label class="required fw-semibold fs-6 mb-2" for="signup-name">Adı</label>
            <input id="signup-name" type="text" name="first_name" value="{{ old("first_name") ?? @$employee->first_name }}"
                   class="form-control form-control-solid mb-3 mb-lg-0 @error('first_name') is-invalid @enderror" placeholder="Adı">
            @error('first_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="fv-row mb-7">
            <label class="required fw-semibold fs-6 mb-2" for="signup-last-name">Soyadı</label>
            <input id="signup-last-name" type="text" name="last_name" value="{{ old("last_name") ?? @$employee->last_name }}"
                   class="form-control form-control-solid mb-3 mb-lg-0 @error('last_name') is-invalid @enderror" placeholder="Soyadı">
            @error('last_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="fv-row mb-7">
            <label class="required fw-semibold fs-6 mb-2" for="signup-email">E-Posta Adresi</label>
            <input id="signup-email" type="email" name="email" value="{{ old("email") ?? @$employee->email }}"
                   class="form-control form-control-solid mb-3 mb-lg-0 @error('email') is-invalid @enderror" placeholder="email@email.com">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="fv-row mb-7">
            <label class="{{$passwordRequired}} fw-semibold fs-6 mb-2" for="signup-password">Şifre</label>
            <input id="signup-password" type="password" name="password" value="{{ old("password") }}"
                   class="form-control form-control-solid mb-3 mb-lg-0 @error('password') is-invalid @enderror" placeholder="Şifre Yazınız">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="fv-row mb-7">
            <label class="{{$passwordRequired}} fw-semibold fs-6 mb-2" for="signup-confirm">Şifre Tekrarı</label>
            <input id="signup-confirm" type="password" name="password_confirmation" value="{{ old("password_confirmation") }}"
                   class="form-control form-control-solid mb-3 mb-lg-0 @error('password_confirmation') is-invalid @enderror" placeholder="Şifre Tekrarı">
            @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <!--begin::Actions-->
        <div class="text-center pt-15">
            <button type="submit" class="btn btn-primary">
                Kaydet
            </button>
        </div>
        <!--end::Actions-->
    </form>
@endsection
