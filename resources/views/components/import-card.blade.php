@props(['filename'])

<div {{ $attributes->class(['card card-flush py-4']) }}>
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>{{ $filename }}.xlsx</h2>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Input group-->
        <div class="fv-row mb-2">
            <!--begin::Dropzone-->
            <div class="dropzone" data-route="{{ $filename }}">
                <!--begin::Message-->
                <div class="dz-message needsclick">
                    <!--begin::Icon-->
                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                    <!--end::Icon-->
                    <!--begin::Info-->
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Dosyayı buraya bırakın veya yüklemek için tıklayın.</h3>
                        <span class="fs-7 fw-semibold text-gray-400">Dosya yüklendikten sonra kuyruğa eklenecektir.</span>
                    </div>
                    <!--end::Info-->
                </div>
            </div>
            <!--end::Dropzone-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Card header-->
</div>
