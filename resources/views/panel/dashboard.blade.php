@extends('layouts.panel-app')

@section('title', 'Yönetim Paneli')

@section('content')
    @livewire('panel.dashboard-product-search')
@endsection

@push('scripts')
    <script>
        window.addEventListener('open-product-modal', () => {
            const modal = new bootstrap.Modal(document.getElementById('productDetailModal'));
            modal.show();
        });

        window.addEventListener('close-product-modal', () => {
            const modalEl = document.getElementById('productDetailModal');
            const modal = bootstrap.Modal.getInstance(modalEl);
            if (modal) {
                modal.hide();
            }
        });
    </script>
    <script src="{{ asset('panel-assets/js/pages/modal.init.js') }}"></script>
@endpush
