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
                            <div class="order-header">
                                <div class="order-header__actions">
                                    <a href="{{ route('order-history') }}" class="btn btn-xs btn-secondary">Back to list</a>
                                </div>
                                <h5 class="order-header__title">Order #{{ $order->id }}</h5>
                                <div class="order-header__subtitle">
                                    Was placed on <mark>{{ $order->created_at->format("d M Y") }}</mark> and is currently <mark>{{ __("status.". $order->payment_status) }}</mark>.
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-table">
                                <div class="table-responsive-sm">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Ürün</th>
                                            <th>Tutar</th>
                                        </tr>
                                        </thead>
                                        <tbody class="card-table__body card-table__body--merge-rows">
                                        @foreach($order->items as $item)
                                            <tr>
                                                <td>{{ $item->product_data['title'] }}</td>
                                                <td>{{ format_money($item->price_data['price']) }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tbody class="card-table__body card-table__body--merge-rows">
                                        <tr>
                                            <th>Ara Toplam</th>
                                            <td>{{ format_money($order->items()->sum('price')) }}</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Toplam</th>
                                            <td>{{ format_money($order->items()->sum('price')) }}</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 no-gutters mx-n2">
                            <div class="col-sm-6 col-12 px-2">
                                <div class="card address-card address-card--featured">
                                    <div class="address-card__badge tag-badge tag-badge--theme">
                                        Kargo Adresi
                                    </div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">{{ $order->shipmentAddress->fullName }}</div>
                                        <div class="address-card__row">
                                            {{ $order->shipmentAddress->address }}
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Telefon Numarası</div>
                                            <div class="address-card__row-content">{{ $order->shipmentAddress->phone }}</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">İl / İlçe</div>
                                            <div class="address-card__row-content">{{ $order->shipmentAddress->city }} / {{ $order->shipmentAddress->district }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">
                                <div class="card address-card address-card--featured">
                                    <div class="address-card__badge tag-badge tag-badge--theme">
                                        Fatura Adresi
                                    </div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">{{ $order->invoiceAddress->fullName }}</div>
                                        <div class="address-card__row">
                                            {{ $order->invoiceAddress->address }}
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Telefon Numarası</div>
                                            <div class="address-card__row-content">{{ $order->invoiceAddress->phone }}</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">İl / İlçe</div>
                                            <div class="address-card__row-content">{{ $order->invoiceAddress->city }} / {{ $order->invoiceAddress->district }}</div>
                                        </div>
                                    </div>
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
