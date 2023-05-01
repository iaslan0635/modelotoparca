@extends('layouts.master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/import/tiger" method="post" enctype="multipart/form-data" style="margin: 5rem">
        @csrf
        <label>
            ITEMS WEB
            <input type="file" name="excel">
        </label>
        <input type="submit" value="Ürünleri içe aktar">
    </form>
    <form action="/import/alternative" method="post" enctype="multipart/form-data" style="margin: 5rem">
        @csrf
        <label>
            ITEMSUBS
            <input type="file" name="excel">
        </label>
        <input type="submit" value="Alternatifleri içe aktar">
    </form>
@endsection
