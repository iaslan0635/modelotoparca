@extends('admin.base.base')

@section('content')

    @php
        $layout = theme()->getOption('layout', 'main/type');
        theme()->addHtmlClass('body', 'app-' . $layout);
    @endphp
    @include('admin.layout/demo1/_default')

@endsection
