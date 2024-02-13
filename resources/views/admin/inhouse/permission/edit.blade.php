@extends('admin.inhouse.layouts.card')
@section('card-title', 'İzin Düzenle')
@section('card-content')
    <livewire:admin.permission-editor :employee="$employee"/>
@endsection

@push('stylesheets')
    <style>
        .permission-checkbox-container {
            position: relative;
            width: fit-content;
        }

        .permission-checkbox-container .permission-opitons {
            z-index: 10;
            display: none;
            position: absolute;
            top: -0.3rem;
            left: 50%;
            transform: translate(-50%, 0);
            gap: .5rem;
            flex-wrap: nowrap;
            width: max-content;
        }

        .permission-checkbox-container:hover .permission-opitons {
            display: flex;
        }

        .permission-checkbox-container .permission-opitons:hover {
            display: flex;
        }

        div.permission-checkbox {
            aspect-ratio: 1;
        }

        div.permission-checkbox.allow {
            background-color: var(--kt-form-check-input-checked-bg-color);
            border-color: var(--kt-form-check-input-checked-border-color);
            background-image: var(--kt-form-check-input-checked-bg-image);
        }

        div.permission-checkbox {
        }

        div.permission-checkbox.deny {
            background-color: var(--kt-danger);
            border-color: var(--kt-danger);
            background-image: var(--kt-form-check-input-indeterminate-bg-image)
        }
    </style>
@endpush
