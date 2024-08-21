@extends("admin.inhouse.layouts.kt")
@section("kt-content")

    <!--begin::Products-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                @can("Stok Yönetimi.Markalar.Ara")
                    <x-admin.search/>
                @endcan
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <h2>{{$brands->total()}} Marka Bulundu</h2>
                {{--                            <div class="w-100 mw-150px">--}}
                {{--                                <!--begin::Select2-->--}}
                {{--                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status"--}}
                {{--                                        data-kt-ecommerce-product-filter="status">--}}
                {{--                                    <option></option>--}}
                {{--                                    <option value="all">All</option>--}}
                {{--                                    <option value="published">Published</option>--}}
                {{--                                    <option value="scheduled">Scheduled</option>--}}
                {{--                                    <option value="inactive">Inactive</option>--}}
                {{--                                </select>--}}
                {{--                                <!--end::Select2-->--}}
                {{--                            </div>--}}
                {{--                            <!--begin::Add product-->--}}
                {{--                            <a href="admin/apps/ecommerce/catalog/add-product" class="btn btn-primary">Add Product</a>--}}
                {{--                            <!--end::Add product-->--}}
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th>Resim</th>
                    <th>İsim</th>
                    <th>URL</th>
                    <th>Bottaki İsmi</th>
                    <th></th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                @can("Stok Yönetimi.Markalar.Listele")
                    <tbody class="fw-semibold text-gray-600">
                    @foreach($brands as $key => $brand)
                        <!--begin::Table row-->
                        <tr>
                            <td>
                                <img src="{{ $brand->imageUrl() }}" style="max-height: 4rem; max-width: 4rem;"/>

                            </td>
                            <td>
                                <span class="fw-bold">{{ Arr::get($brand, "name") }}</span>
                            </td>
                            <td>
                                <span class="fw-bold">{{ Arr::get($brand, "slug") }}</span>
                            </td>
                            <td>
                                <span class="fw-bold">{{ Arr::get($brand, "botname") }}</span>
                            </td>
                            <td class="text-end">
                                @can(permissions("Stok Yönetimi.Markalar.Düzenle.*"))
                                    <div style="display: flex; gap: 1rem; justify-content: flex-end; flex-wrap: wrap">
                                        <a class="btn btn-sm btn-info" href="{{ route('admin.brands.edit', $brand) }}">
                                            Düzenle
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                                      fill="currentColor"/>
                                                <path
                                                    d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                    fill="currentColor"/>
                                                <path
                                                    d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                    fill="currentColor"/>
                                            </svg>
                                        </a>
                                    </div>
                                @endcan
                            </td>
                        </tr>
                        <!--end::Table row-->
                    @endforeach
                    </tbody>
                @endcan
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            {{ $brands->links() }}
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
@endsection
