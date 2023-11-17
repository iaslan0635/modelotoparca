@extends("admin.inhouse.layouts.table")

@section("title", "Mağzalara gidemeyen ürünler")

@section("head")
    <th class="min-w-125px">Ürün</th>
    <th class="min-w-125px">Hatalı mağzalar</th>
@endsection

@section("body")
    @foreach($fails as ["product" => $product, "failedMerchants" => $failedMerchants])
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a  class="symbol symbol-50px">
                        <span class="symbol-label"
                              style="background-image:url({{ $product?->imageUrl() }});"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                        <!--begin::Title-->
                        <a
                           class="text-gray-800 text-hover-primary fs-5 fw-bold"
                           data-kt-ecommerce-product-filter="product_name">{{ $product?->title ?? "Ürün belirltilmemiş" }}</a>
                        <!--end::Title-->
                    </div>
                </div>
            </td>
            <td>
                {{ implode(", ", $failedMerchants ?? []) }}
            </td>
        </tr>
    @endforeach
@endsection

@section("pagination", $fails->links())
