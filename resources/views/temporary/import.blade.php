@extends('layouts.master')
@section('content')
    <form action="/import/tiger" method="post" style="margin: 5rem">
        <label>
            ITEMS WEB
            <input type="file" name="excel">
        </label>
        <input type="submit" value="Ürünleri içe aktar">
    </form>
    <form action="/import/alternative" method="post" style="margin: 5rem">
        <label>
            ITEMSUBS
            <input type="file" name="excel">
        </label>
        <input type="submit" value="Alternatifleri içe aktar">
    </form>
@endsection
