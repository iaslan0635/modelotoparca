<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Card-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Yeni düzeltme seti ekle</h2>
            </div>
            <!--end::Card title-->
            <div class="card-toolbar">
                <button class="btn btn-primary" wire:click="create">
                    <span
                        class="spinner-border spinner-border-sm" role="status"
                        wire:loading wire:target="create"
                    ></span>
                    Ekle
                </button>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div
            class="card-body pt-0 d-flex flex-wrap" style="gap: 2rem"
            x-data="{ drafts: $wire.entangle('draftSynonyms') }"
            x-effect="drafts = drafts.filter(draft => draft?.trim())"
        >
            <template x-for="i in (drafts.length + 1)" :key="i">
                <input x-model="drafts[i-1]" type="text" class="form-control" style="width: 10em" placeholder="Yeni kelime ekle"/>
            </template>
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
                {{--@foreach(array_reverse($searchReplacements, true) as $key => $replacement)
                    <!--begin::Table row-->
                    <tr>
                        <td>
                            <span class="fw-bold">{{ $replacement["original"] }}</span>
                        </td>
                        <td>
                            <span class="fw-bold">{{ $replacement["replacement"] }}</span>
                        </td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-danger" wire:click="delete({{$key}})">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading wire:target="delete({{$key}})"></span>
                                Sil
                            </button>
                        </td>
                    </tr>
                    <!--end::Table row-->
                @endforeach--}}
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
</div>
