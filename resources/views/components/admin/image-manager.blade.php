@props([
    'images',
    'upload_action',
    'readonly_images',
])

<!--begin::Thumbnail settings-->
<div class="card card-flush py-4">
    <!--begin::Card body-->
    <div class="card-body text-center">
        @foreach(collect($readonly_images)->merge($images) as $image)
            @php
                $isModel = $image instanceof \App\Models\Image;
                $imageUrl = $isModel ? $image->url : $image;
            @endphp
            <!--begin::Image input-->
            <div class="image-input image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-150px h-150px" style="background-image: url({{$imageUrl}})"></div>
                <!--end::Preview existing avatar-->

                @if($isModel)
                    <!--begin::Remove-->
                    <form action="{{ route('admin.delete-image') }}" method="post">
                        @csrf
                        <input type="hidden" name="image_id" value="{{ $image->id }}">
                        <button
                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            style="position: absolute; right: 0; top: 0;transform:translate(50%,-50%);"
                            data-bs-toggle="tooltip" title="Resimi kaldır" type="submit">
                            <i class="bi bi-x fs-2"></i>
                        </button>
                    </form>
                    <!--end::Remove-->
                @endif
            </div>
            <!--end::Image input-->
        @endforeach

        <!--begin::Input group-->
        <div class="fv-row mb-2 mx-auto" style="width: min-content">
            <!--begin::Dropzone-->
            <div class="dropzone image">
                <!--begin::Message-->
                <div class="dz-message needsclick">
                    <!--begin::Icon-->
                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                    <!--end::Icon-->
                    <!--begin::Info-->
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Resim yükle</h3>
                    </div>
                    <!--end::Info-->
                </div>
            </div>
            <!--end::Dropzone-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Thumbnail settings-->
@once
    @push('custom_scripts')
        <script>
            $(() => {
                $('.dropzone.image')
                    .dropzone({
                        url: "{{ $upload_action }}",
                        headers: {"X-CSRF-TOKEN": "{{ csrf_token() }}"}
                    })
            })
        </script>
    @endpush
@endonce
