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
                        <div class="dashboard">
                            <div class="dashboard__profile card profile-card">
                                <div class="card-body profile-card__body">
                                    <div class="profile-card__avatar">
                                        <img src="images/avatars/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="profile-card__name">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</div>
                                    <div class="profile-card__email">{{ auth()->user()->email }}</div>
                                    <div class="profile-card__edit">
                                        <a href="{{ route('edit-profile') }}" class="btn btn-secondary btn-sm">Profilimi Düzenle</a>
                                    </div>
                                </div>
                            </div>
                            @if(count(auth()->user()->addresses) > 0)
                                <div class="dashboard__address card address-card address-card--featured">
                                    <div class="address-card__badge tag-badge tag-badge--theme">
                                        Varsayılan
                                    </div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">{{ auth()->user()->addresses[0]?->fullName }}</div>
                                        <div class="address-card__row">
                                            {{ auth()->user()->addresses[0]?->address }}
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Telefon Numarası</div>
                                            <div class="address-card__row-content">{{ auth()->user()->addresses[0]?->phone }}</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">İl / İlçe</div>
                                            <div class="address-card__row-content">{{ auth()->user()->addresses[0]?->city }} / {{ auth()->user()->addresses[0]?->district }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="dashboard__orders card">
                                <div class="card-header">
                                    <h5>Son Siparişlerim</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(auth()->user()->orders as $order)
                                                <tr>
                                                    <td><a href="{{ route('order-details', $order) }}">#{{ $order->id }}</a></td>
                                                    <td>{{ $order->created_at->diffForHumans() }}</td>
                                                    <td>Pending</td>
                                                    <td>{{ count($order->items) }} ürün için {{ \App\Facades\TaxFacade::formattedPrice($order->items()->sum('price')) }}</td>
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
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
@endsection
