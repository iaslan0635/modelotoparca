@extends('admin.base.base')

@section('content')

    <!--begin::Main-->
    @if (theme()->getOption('layout', 'main/type') == 'blank')
        <div class="d-flex flex-column flex-root">
            {{ $slot }}
        </div>
    @else
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
            {{ theme()->getview('admin.layout/aside/_base') }}

            <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                {{ theme()->getview('admin.layout/header/_base') }}

                @if (theme()->getOption('layout', 'toolbar/display') !== false)
                    {{ theme()->getview('admin.layout/_toolbar') }}
                @endif

                <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        {{ theme()->getview('admin.layout/_content', compact('slot')) }}
                    </div>
                    <!--end::Content-->

                    {{ theme()->getview('admin.layout/_footer') }}
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->

        <!--begin::Drawers-->
        {{ theme()->getview('admin.partials/topbar/_activity-drawer', array('drawer-direction' => 'end')) }}
        <!--end::Drawers-->

        <!--begin::Engage-->
        {{ theme()->getview('admin.partials/engage/_main') }}
        <!--end::Engage-->

        @if(theme()->getOption('layout', 'scrolltop/display') === true)
            {{ theme()->getview('admin.layout/_scrolltop') }}
        @endif
    @endif
    <!--end::Main-->

@endsection
