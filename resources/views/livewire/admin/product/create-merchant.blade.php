<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">
    @if(!$product->merchants()->where('merchant', 'n11')->first())
        <!--begin::Primary button-->
        <button wire:click="createN11" class="btn btn-sm fw-bold btn-primary">
            N11 oluştur
        </button>
        <!--end::Primary button-->
    @endif
</div>
<!--end::Actions-->
