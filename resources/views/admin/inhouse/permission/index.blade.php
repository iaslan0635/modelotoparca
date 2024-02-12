@extends('admin.inhouse.layouts.card')
@section('card-title', 'İzinler')
@section('card-content')
    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
        <!--begin::Table head-->
        <thead>
        <!--begin::Table row-->
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            <th class="w-100">Kullanıcı</th>
            <th class="">Düzenle</th>
        </tr>
        <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="fw-semibold text-gray-600">
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->full_name }}</td>
                <td>
                    <a href="{{ route('admin.permission.edit', $employee) }}" class="btn btn-primary">Düzenle</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <!--end::Table body-->
    </table>
@endsection
