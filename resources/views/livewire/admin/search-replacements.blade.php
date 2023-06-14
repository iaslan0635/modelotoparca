<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Card-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Yeni düzeltme ekle</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-5"><input type="text" class="form-control" placeholder="reno" wire:model.defer="original"/></div>
                <div class="col-auto" style="display: flex; align-items: center;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="col-5"><input type="text" class="form-control" placeholder="renault" wire:model.defer="replacement"/></div>
                <div class="col">
                    <button class="btn btn-primary" wire:click="add()">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading wire:target="add()"></span>
                        Ekle
                    </button>
                </div>
            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
    <!--begin::Products-->
    <div class="card card-flush mt-4">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="">Aranan</th>
                    <th class="">Düzeltilen</th>
                    <th class="text-end">Sil</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-semibold text-gray-600">
                @foreach($searchReplacements as $key => $replacement)
                    <!--begin::Table row-->
                    <tr>
                        <td>
                            <span class="fw-bold">{{ $replacement["original"] }}</span>
                        </td>
                        <td>
                            <span class="fw-bold">{{ $replacement["replacement"] }}</span>
                        </td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-danger" wire:click="delete({{$key}})">Sil</button>
                        </td>
                    </tr>
                    <!--end::Table row-->
                @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
</div>
