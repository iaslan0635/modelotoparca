@extends("admin.authentication.layout")
@section("form")
    <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="../../demo1/dist/authentication/layouts/creative/new-password.html"
          action="#">
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">Şifreyi Sıfırla</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-500 fw-semibold fs-6">Şifrenizi sıfırlamak için e-postanızı girin.</div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email" class="form-control bg-transparent"/>
            <!--end::Email-->
        </div>
        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
                Sıfırla
            </button>
            <a href="/admin/login" class="btn btn-light">Giriş yap</a>
        </div>
        <!--end::Actions-->
    </form>
@endsection
