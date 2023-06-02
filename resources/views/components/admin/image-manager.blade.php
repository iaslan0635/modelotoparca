@props([
    'images',
    'delete_action',
    'upload_action'
])

<!--begin::Card body-->
<div class="card-body pt-0">
    <div class="row">
        @foreach($images as $image)
        <div class="col-4 p-4">
            <!--begin::Card-->
            <div class="card overlay overflow-hidden">
                <div class="card-body p-0">
                    <div class="overlay-wrapper">
                        <img src="{{ $image->path }}" alt="" class="w-100 rounded"/>
                    </div>
                    <div class="overlay-layer bg-dark bg-opacity-25">
                        <form action="{{ route('admin.delete-image') }}" method="post">
                            @csrf
                            <input type="hidden" name="image_id" value="{{ $image->id }}">
                            <button type="submit" class="btn btn-danger btn-shadow">Sil</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        @endforeach
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-2">
        <!--begin::Dropzone-->
        <div class="dropzone image">
            <!--begin::Message-->
            <div class="dz-message needsclick">
                <!--begin::Icon-->
                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                <!--end::Icon-->
                <!--begin::Info-->
                <div class="ms-4">
                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Dosyayı buraya bırakın veya yüklemek için tıklayın.</h3>
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Dropzone-->
    </div>
    <!--end::Input group-->
</div>
<!--end::Card body-->
<script>
    $('.dropzone.image')
        .dropzone({
            url: "{{ $upload_action }}",
            headers: {"X-CSRF-TOKEN": "{{ csrf_token() }}"}
        })
</script>
