<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>
    @include('panel.partials.head')
</head>

<body>
<!-- layout wrapper -->
<div id="layout-wrapper">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
    @include('panel.partials.topbar')

            </div>
    </header>
        <!-- removeNotificationModal -->
        @include('panel.partials.thememodal')

        @include('panel.partials.sidebar')

    <!-- main content -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        @include('panel.partials.footer')
    </div>
    <!-- end main content -->

</div>
<!-- END layout-wrapper -->

@include('panel.partials.scripts')

@stack('scripts')
</body>
</html>
