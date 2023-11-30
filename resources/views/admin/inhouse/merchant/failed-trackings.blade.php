@extends("admin.inhouse.layouts.card")

@section("title", "Mağzalara gidemeyen ürünler")

@section("card-content")
    <div class="accordion mb-8" id="kt_accordion">
        @foreach($fails as ["product" => $product, "merchants" => $merchants, "trackings" => $trackings,])
            <x-accordion id-prefix="product" :id="$product->id">
                <x-slot:title>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a class="symbol symbol-50px">
                            <span class="symbol-label"
                                  style="background-image:url({{ $product->imageUrl() }});"></span>
                        </a>
                        <!--end::Thumbnail-->
                        <div class="ms-5">
                            <!--begin::Title-->
                            <a
                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                data-kt-ecommerce-product-filter="product_name">{{ $product->title }}</a>
                            <!--end::Title-->
                        </div>
                    </div>

                    <div class="ml-8">
                        @foreach($merchants as $merchant)
                            <div class="badge badge-light-danger">{{ ucfirst($merchant) }}</div>
                        @endforeach
                    </div>
                </x-slot:title>

                @foreach($merchants as $mAlias)
                    <x-accordion id-prefix="merchant" :id="$product->id" :title="$mAlias" show>
                        <ul>
                            @foreach($trackings as $tracking)
                                @foreach($tracking->reasons as $reason)
                                    <li>{{ $reason }}</li>
                                @endforeach
                            @endforeach
                        </ul>
                    </x-accordion>
                @endforeach
            </x-accordion>
        @endforeach
    </div>

    {{ $fails->links() }}
@endsection
