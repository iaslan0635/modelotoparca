@extends('admin.layout')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Sayfa Düzenle
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3"></div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card card-flush py-4 mx-auto" style="width: max-content">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <div class="card-body pt-0">
                                <form id="kt_modal_add_role_form" class="form" action="{{ route('admin.discounts.update', $discount) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <!--begin::Scroll-->
                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll" data-kt-scroll="true"
                                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_modal_add_role_header" data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                                        <div class="fv-row mb-10">
                                            <label class="fs-5 fw-bold form-label mb-2">
                                                <span class="required">Başlık</span>
                                            </label>
                                            <input class="form-control form-control-solid" name="title" value="{{ $discount->title }}" required/>
                                        </div>
                                        <div class="fv-row mb-10">
                                            <label class="fs-5 fw-bold form-label mb-2">
                                                <span class="required">URL</span>
                                            </label>
                                            <input class="form-control form-control-solid" name="slug" value="{{ $discount->slug }}" required/>
                                        </div>
                                        <div class="fv-row mb-10">
                                            <label class="fs-5 fw-bold form-label mb-2">
                                                <span class="required">Keywords (,) ile ayırınız.</span>
                                            </label>
                                            <input class="form-control form-control-solid" name="keywords" value="{{ $discount->keywords }}" required/>
                                        </div>
                                        <div class="fv-row mb-10">
                                            <label class="fs-5 fw-bold form-label mb-2">
                                                <span class="required">Açıklama</span>
                                            </label>
                                            <input class="form-control form-control-solid" name="description" value="{{ $discount->description }}" required/>
                                        </div>
                                        <div class="fv-row mb-10">
                                            <label class="fs-5 fw-bold form-label mb-2">
                                                <span class="required">İçeriği</span>
                                            </label>
                                            <textarea id="editor" class="form-control form-control-solid" name="content">{{ $discount->content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="text-center pt-15">
                                        <button type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Kaydet</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@push('styles')
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">
@endpush
@push('vendor_scripts')
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script type="importmap">
            {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
                }
            }
        </script>
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font
        } from 'ckeditor5';

        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <!-- A friendly reminder to run on a server, remove this during the integration. -->
    <script>
        window.onload = function() {
            if ( window.location.protocol === "file:" ) {
                alert( "This sample requires an HTTP server. Please serve this file with a web server." );
            }
        };
    </script>
@endpush
@push('custom_scripts')
    <script src="assets/js/custom/apps/user-management/roles/list/add.js"></script>
    <script src="assets/js/custom/apps/user-management/roles/list/update-role.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
