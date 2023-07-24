@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--after-header"></div>
        <div class="block">
            <div class="container container--max--xl">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        @include('account.partials.navigation')
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>Takip Listem</h5>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-table">
                                <div class="table-responsive-sm">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Ürün</th>
                                            <th>Ürün Kodu</th>
                                            <th>Oem Kod</th>
                                            <th>Marka</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(auth()->user()->whislist as $product)
                                            <tr>
                                                <td><a href="{{ route('product.show', $product) }}">{{ $product->title }}</a>
                                                </td>
                                                <td>{{ $product->producercode }}</td>
                                                <td>{{ $product->oem_codes }}</td>
                                                <td>{{ $product->brand->name }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
    <!-- site__body / end -->
@endsection
