<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
    {{ theme()->getview('admin.layout/partials/_header') }}
    <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        {{ theme()->getview('admin.layout/partials/_sidebar') }}
        <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    {{ theme()->getview('admin.layout/partials/_toolbar') }}
                    {{ theme()->getview('admin.layout/_content', compact('slot')) }}
                </div>
                <!--end::Content wrapper-->
                {{ theme()->getview('admin.layout/partials/_footer') }}
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
{{ theme()->getview('admin.partials/layout-builder/drawer/_main') }}
