<!--begin::Sidebar-->
<div
    class="sidebar p-5 px-lg-0 py-lg-11"

    data-kt-drawer="true"
    data-kt-drawer-name="sidebar"
	data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="275px"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_sidebar_toggle"
>
    @if(theme()->getOption('layout', 'sidebar/search') !== false)
        {{ theme()->getview('admin.layout/sidebar/__search') }}
    @endif

    {{ theme()->getview('admin.layout/sidebar/__popular-questions') }}

    {{ theme()->getview('admin.layout/sidebar/__latest-tutorials') }}
</div>
<!--end::Sidebar-->
