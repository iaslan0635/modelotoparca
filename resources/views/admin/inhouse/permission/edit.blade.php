@extends('admin.inhouse.layouts.card')
@section('card-title', "$employee->full_name adlı kullanıcının izinlerini düzenle")
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

        .permission-checkbox {
            aspect-ratio: 1;
            background-size: 65% 65% !important;
        }

        .permission-checkbox.allow {
            background-color: var(--kt-primary);
            background-image: var(--kt-form-check-input-checked-bg-image);
        }

        .permission-checkbox.deny {
            background-color: var(--kt-danger);
            background-image: var(--kt-form-check-input-indeterminate-bg-image)
        }

        :is(.permission-opitons, .permission-checkbox.indeterminate).ghost-allow {
            border-color: var(--kt-primary);
            background-color: var(--kt-primary-light);
        }

        :is(.permission-opitons, .permission-checkbox.indeterminate).ghost-deny {
            border-color: var(--kt-danger);
            background-color: var(--kt-danger-light);
        }

        .permission-opitons {
            border: 1px solid;
            border-color: var(--kt-dark);
            background-color: var(--bs-body-bg);
        }

        li {
            list-style: none;
        }
    </style>
@endpush
