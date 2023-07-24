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
                                @if(count(auth()->user()->addresses) > 0)
                                    <div style="width: calc(60% - 12px)" class="dashboard__address card address-card address-card--featured">
                                        <div class="address-card__badge tag-badge tag-badge--theme">
                                            Varsayılan Adres
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
                                @else
                                <div style="width: calc(60% - 12px)" class="dashboard__ord card-white address-card address-card--featured">
                                    <div class="h-100">
                                        <div class="addresses-list">
                                        <a href="{{ route('add-adress') }}" class="addresses-list__item addresses-list__item--new">
                                        <div class="address-card__row-title">Kayıtlı Adres Bulunmamaktadır</div>
                                        <div class="addresses-list__plus"></div>
                                        <div class="btn btn-secondary btn-sm">Yeni Adres Ekle</div>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                @endif



                            <div class="dashboard__ord card-bisque address-card address-card--featured">

                                <div class="h-100">
                                    <div class="px-2 bg-white border h-100">
                                        <!-- Cart summary -->
                                        <div class="d-flex align-items-center py-4 border-bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                                <g id="Group_25000" data-name="Group 25000" transform="translate(-1367 -427)">
                                                    <path id="Path_32314" data-name="Path 32314" d="M24,0A24,24,0,1,1,0,24,24,24,0,0,1,24,0Z" transform="translate(1367 427)" fill="#d43533"></path>
                                                    <g id="Group_24770" data-name="Group 24770" transform="translate(1382.999 443)">
                                                        <path id="Path_25692" data-name="Path 25692" d="M294.507,424.89a2,2,0,1,0,2,2A2,2,0,0,0,294.507,424.89Zm0,3a1,1,0,1,1,1-1A1,1,0,0,1,294.507,427.89Z" transform="translate(-289.508 -412.89)" fill="#fff"></path>
                                                        <path id="Path_25693" data-name="Path 25693" d="M302.507,424.89a2,2,0,1,0,2,2A2,2,0,0,0,302.507,424.89Zm0,3a1,1,0,1,1,1-1A1,1,0,0,1,302.507,427.89Z" transform="translate(-289.508 -412.89)" fill="#fff"></path>
                                                        <g id="LWPOLYLINE">
                                                            <path id="Path_25694" data-name="Path 25694" d="M305.43,416.864a1.5,1.5,0,0,0-1.423-1.974h-9a.5.5,0,0,0,0,1h9a.467.467,0,0,1,.129.017.5.5,0,0,1,.354.611l-1.581,6a.5.5,0,0,1-.483.372h-7.462a.5.5,0,0,1-.489-.392l-1.871-8.433a1.5,1.5,0,0,0-1.465-1.175h-1.131a.5.5,0,1,0,0,1h1.043a.5.5,0,0,1,.489.391l1.871,8.434a1.5,1.5,0,0,0,1.465,1.175h7.55a1.5,1.5,0,0,0,1.423-1.026Z" transform="translate(-289.508 -412.89)" fill="#fff"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="ml-3 d-flex flex-column justify-content-between">
                                                <span class="fs-20 fw-700 mb-1">01</span>
                                                <span class="fs-14 fw-400 text-secondary">Sepetinizde Ürün</span>
                                            </div>
                                        </div>

                                        <!-- Wishlist summary -->
                                        <div class="d-flex align-items-center py-4 border-bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                                <g id="Group_25000" data-name="Group 25000" transform="translate(-1367 -499)">
                                                    <path id="Path_32309" data-name="Path 32309" d="M24,0A24,24,0,1,1,0,24,24,24,0,0,1,24,0Z" transform="translate(1367 499)" fill="#3490f3"></path>
                                                    <g id="Group_24772" data-name="Group 24772" transform="translate(1383 515)">
                                                        <g id="Wooden" transform="translate(0 1)">
                                                            <path id="Path_25676" data-name="Path 25676" d="M290.82,413.6a4.5,4.5,0,0,0-6.364,0l-.318.318-.318-.318a4.5,4.5,0,1,0-6.364,6.364l6.046,6.054a.9.9,0,0,0,1.272,0l6.046-6.054A4.5,4.5,0,0,0,290.82,413.6Zm-.707,5.657-5.975,5.984-5.975-5.984a3.5,3.5,0,1,1,4.95-4.95l.389.389a.9.9,0,0,0,1.272,0l.389-.389a3.5,3.5,0,1,1,4.95,4.95Z" transform="translate(-276.138 -412.286)" fill="#fff"></path>
                                                        </g>
                                                        <rect id="Rectangle_1603" data-name="Rectangle 1603" width="16" height="16" transform="translate(0)" fill="none"></rect>
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="ml-3 d-flex flex-column justify-content-between">
                                                <span class="fs-20 fw-700 mb-1">07</span>
                                                <span class="fs-14 fw-400 text-secondary">Takip Listenizdeki Ürünler</span>
                                            </div>
                                        </div>

                                        <!-- Order summary -->
                                        <div class="d-flex align-items-center py-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                                <g id="Group_25000" data-name="Group 25000" transform="translate(-1367 -576)">
                                                    <path id="Path_32315" data-name="Path 32315" d="M24,0A24,24,0,1,1,0,24,24,24,0,0,1,24,0Z" transform="translate(1367 576)" fill="#85b567"></path>
                                                    <path id="_2e746ddacacf202af82cf4480bae6173" data-name="2e746ddacacf202af82cf4480bae6173" d="M11.483,3h-.009a.308.308,0,0,0-.1.026L4.26,6.068A.308.308,0,0,0,4,6.376V15.6a.308.308,0,0,0,.026.127v0l.009.017a.308.308,0,0,0,.157.147l7.116,3.042a.338.338,0,0,0,.382,0L18.8,15.9a.308.308,0,0,0,.189-.243q0-.008,0-.017s0-.01,0-.015,0-.01,0-.015,0,0,0,0V6.376a.308.308,0,0,0-.255-.306L11.632,3.031l-.007,0a.308.308,0,0,0-.05-.017l-.009,0-.022,0h-.062Zm.014.643L13,4.287,6.614,7.02,6.6,7.029,5.088,6.383,11.5,3.643Zm2.29.979,1.829.782L9.108,8.188a.414.414,0,0,0-.186.349v3.291l-.667-1a.308.308,0,0,0-.393-.1l-.786.392V7.493l6.712-2.87ZM16.4,5.738l1.509.645L11.5,9.124,9.99,8.48l6.39-2.733.018-.009ZM4.615,6.85l1.846.789v3.975a.308.308,0,0,0,.445.275l.987-.494,1.064,1.595v0a.308.308,0,0,0,.155.14h0l.027.009a.308.308,0,0,0,.057.012h.036l.036,0,.025,0,.018,0,.015,0a.308.308,0,0,0,.05-.022h0a.308.308,0,0,0,.156-.309V8.955l1.654.707v8.56L4.615,15.411Zm13.765,0v8.56L11.8,18.223V9.662Z" transform="translate(1379.5 588.5)" fill="#fff" stroke="#fff" stroke-width="0.25" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            <div class="ml-3 d-flex flex-column justify-content-between">
                                                <span class="fs-20 fw-700 mb-1">{{ auth()->user()->orders_count }}</span>
                                                <span class="fs-14 fw-400 text-secondary">Toplam Siparişiniz</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                    <td>{{ __("status.".$order->payment_status) }}</td>
                                                    <td>{{ count($order->items) }} ürün için {{ \App\Facades\TaxFacade::formattedPrice($order->items()->sum('price')) }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="aiz-user-panel">--}}
{{--                            <div class="row gutters-16">--}}
{{--                                <!-- Wallet summary -->--}}
{{--                                <div class="col-xl-8 col-md-6 mb-4">--}}
{{--                                    <div class="h-100" style="background-image: url('https://demo.activeitzone.com/ecommerce/public/assets/img/wallet-bg.png'); background-size: cover; background-position: center center;">--}}
{{--                                        <div class="p-4 h-100 w-100 w-xl-50">--}}
{{--                                            <p class="fs-14 fw-400 text-gray mb-3">Wallet Balance</p>--}}
{{--                                            <h1 class="fs-30 fw-700 text-white ">$1,703.300</h1>--}}
{{--                                            <hr class="border border-dashed border-white opacity-40 ml-0 mt-4 mb-4">--}}
{{--                                            <p class="fs-14 fw-400 text-gray mb-1">Last Recharge <strong>05.06.2022</strong></p>--}}
{{--                                            <h3 class="fs-20 fw-700 text-white ">$12.150</h3>--}}
{{--                                            <button class="btn btn-block border border-soft-light hov-bg-dark text-white mt-5 py-3" onclick="show_wallet_modal()" style="border-radius: 30px; background: rgba(255, 255, 255, 0.1);">--}}
{{--                                                <i class="la la-plus fs-18 fw-700 mr-2"></i>--}}
{{--                                                Recharge Wallet--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col mb-4">--}}
{{--                                    <div class="row h-100  row-cols-1">--}}
{{--                                        <!-- Expenditure summary -->--}}
{{--                                        <div class="col">--}}
{{--                                            <div class="p-4 bg-primary " style="margin-bottom: 2rem;">--}}
{{--                                                <div class="d-flex align-items-center pb-4 ">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">--}}
{{--                                                        <g id="Group_25000" data-name="Group 25000" transform="translate(-926 -614)">--}}
{{--                                                            <rect id="Rectangle_18646" data-name="Rectangle 18646" width="48" height="48" rx="24" transform="translate(926 614)" fill="rgba(255,255,255,0.5)"></rect>--}}
{{--                                                            <g id="Group_24786" data-name="Group 24786" transform="translate(701.466 93)">--}}
{{--                                                                <path id="Path_32311" data-name="Path 32311" d="M122.052,10V8.55a.727.727,0,1,0-1.455,0V10a2.909,2.909,0,0,0-2.909,2.909v.727A2.909,2.909,0,0,0,120.6,16.55h1.455A1.454,1.454,0,0,1,123.506,18v.727a1.454,1.454,0,0,1-1.455,1.455H120.6a1.454,1.454,0,0,1-1.455-1.455.727.727,0,1,0-1.455,0,2.909,2.909,0,0,0,2.909,2.909V23.1a.727.727,0,1,0,1.455,0V21.641a2.909,2.909,0,0,0,2.909-2.909V18a2.909,2.909,0,0,0-2.909-2.909H120.6a1.454,1.454,0,0,1-1.455-1.455v-.727a1.454,1.454,0,0,1,1.455-1.455h1.455a1.454,1.454,0,0,1,1.455,1.455.727.727,0,0,0,1.455,0A2.909,2.909,0,0,0,122.052,10" transform="translate(127.209 529.177)" fill="#fff"></path>--}}
{{--                                                            </g>--}}
{{--                                                        </g>--}}
{{--                                                    </svg>--}}
{{--                                                    <div class="ml-3 d-flex flex-column justify-content-between">--}}
{{--                                                        <span class="fs-14 fw-400 text-white mb-1">Total Expenditure</span>--}}
{{--                                                        <span class="fs-20 fw-700 text-white">$12,666.350</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="https://demo.activeitzone.com/ecommerce/purchase_history" class="fs-12 text-white">--}}
{{--                                                    View Order History--}}
{{--                                                    <i class="las la-angle-right fs-14"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Club Point summary -->--}}
{{--                                        <div class="col">--}}
{{--                                            <div class="p-4 bg-warning">--}}
{{--                                                <div class="d-flex align-items-center pb-4 ">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">--}}
{{--                                                        <g id="Group_25000" data-name="Group 25000" transform="translate(-926 -614)">--}}
{{--                                                            <rect id="Rectangle_18646" data-name="Rectangle 18646" width="48" height="48" rx="24" transform="translate(926 614)" fill="rgba(255,255,255,0.5)"></rect>--}}
{{--                                                            <g id="Group_24786" data-name="Group 24786" transform="translate(701.466 93)">--}}
{{--                                                                <path id="Path_2961" data-name="Path 2961" d="M221.069,0a8,8,0,1,0,8,8,8,8,0,0,0-8-8m0,15a7,7,0,1,1,7-7,7,7,0,0,1-7,7" transform="translate(27.466 537)" fill="#fff"></path>--}}
{{--                                                                <path id="Union_11" data-name="Union 11" d="M16425.393,420.226l-3.777-5.039a.42.42,0,0,1-.012-.482l1.662-2.515a.416.416,0,0,1,.313-.186l0,0h4.26a.41.41,0,0,1,.346.19l1.674,2.515a.414.414,0,0,1-.012.482l-3.777,5.039a.413.413,0,0,1-.338.169A.419.419,0,0,1,16425.393,420.226Zm-2.775-5.245,3.113,4.148,3.109-4.148-1.32-1.983h-3.592Z" transform="translate(-16177.195 129)" fill="#fff"></path>--}}
{{--                                                            </g>--}}
{{--                                                        </g>--}}
{{--                                                    </svg>--}}
{{--                                                    <div class="ml-3 d-flex flex-column justify-content-between">--}}
{{--                                                        <span class="fs-14 fw-400 text-white mb-1">Total Club Points</span>--}}
{{--                                                        <span class="fs-20 fw-700 text-white">10985</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="https://demo.activeitzone.com/ecommerce/earning-points" class="fs-12 text-white">--}}
{{--                                                    Convert Club Points--}}
{{--                                                    <i class="las la-angle-right fs-14"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
@endsection
