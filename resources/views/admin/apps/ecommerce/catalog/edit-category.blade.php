@extends('admin.layout')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="admin/apps/ecommerce/catalog/categories">
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <x-admin.image-manager
                            :images="$category->images"
                            :upload_action="route('admin.categories.edit.image', $category)"
                        />
                        <!--begin::Status-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Öznitelikler</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <div class="card-body pt-0">
                                <form action="{{ route('admin.categories.update', $category) }}" method="post">
                                    @csrf
                                    <div class="mb-4">
                                        <label>
                                            <input type="checkbox" name="hide_in_sidebar" @checked(old('hide_in_sidebar', $category->hide_in_sidebar))>
                                            Yan menüde gizle
                                        </label>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Kaydet</button>
                                </form>
                            </div>
                        </div>
                        <!--end::Status-->
                    </div>
                    <!--end::Aside column-->
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#todo"></a>
                            </li>
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade show active" id="todo" role="tabpanel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">

                                </div>
                            </div>
                            <!--end::Tab pane-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Main column-->
                </div>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@push('vendor_scripts')
    <script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
@endpush
@push('custom_scripts')
    <script src="assets/js/custom/apps/ecommerce/catalog/save-category.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
