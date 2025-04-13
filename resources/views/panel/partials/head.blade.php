<meta charset="utf-8" />
<title>@yield('title', 'Yönetim Paneli')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="Enpro" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('panel-assets/images/favicon.ico') }}">

<link href="{{ asset('panel-assets/libs/jsvectormap/jsvectormap.min.cs') }}" rel="stylesheet" type="text/css" />
<!-- Layout config Js -->
<script src="{{ asset('panel-assets/js/layout.js') }}"></script>
<!-- Bootstrap Css -->
<link href="{{ asset('panel-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('panel-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('panel-assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Custom Css -->
<link href="{{ asset('panel-assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

@stack('styles')
