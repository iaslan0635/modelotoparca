@extends("admin.authentication.layout")
@section("form")
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="post">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">Giriş yap</h1>
            <!--end::Title-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="E-Posta" name="email" class="form-control bg-transparent"/>
            <!--end::Email-->
        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <input type="password" placeholder="Şifre" name="password" class="form-control bg-transparent"/>
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            <!--begin::Link-->
            <a href="/admin/authentication/reset-password" class="link-primary">Şifremi unuttum</a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                Sign In
            </button>
        </div>
        <!--end::Submit button-->
    </form>
@endsection
