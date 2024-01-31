@extends('admin.inhouse.layouts.kt')
@section('kt-content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                {{--
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor"/>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user"/>
                </div>
                <!--end::Search-->
                --}}
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Add user-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Kullanıcı Ekle
                    </button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Modal - Add task-->
                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_user_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Kullanıcı Ekle</h2>
                                <!--end::Modal title-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_add_user_form" class="form" action="{{ route('admin.auth.register') }}" method="post">
                                    @csrf
                                    <!--begin::Scroll-->
                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                        <div class="fv-row mb-7">
                                            <label class="required fw-semibold fs-6 mb-2" for="signup-name">Adınız</label>
                                            <input id="signup-name" type="text" name="first_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="Adınız">
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-semibold fs-6 mb-2" for="signup-last-name">Soyadınız</label>
                                            <input id="signup-last-name" type="text" name="last_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="Soyadınız">
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-semibold fs-6 mb-2" for="signup-gender">Cinsiyetiniz</label>
                                            <select name="gender" id="signup-gender" class="form-control form-control-solid mb-3 mb-lg-0">
                                                <option value="male">Erkek</option>
                                                <option value="female">Kadın</option>
                                            </select>
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-semibold fs-6 mb-2" for="signup-date-of-birth">Doğum Tarihiniz</label>
                                            <input id="signup-date-of-birth" type="date" name="date_of_birth"
                                                   class="form-control form-control-solid mb-3 mb-lg-0">
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-semibold fs-6 mb-2" for="signup-email">E-Posta Adresi</label>
                                            <input id="signup-email" type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="email@email.com">
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-semibold fs-6 mb-2" for="signup-password">Şifre</label>
                                            <input id="signup-password" type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="Şifre Yazınız">
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-semibold fs-6 mb-2" for="signup-confirm">Şifre Tekrarı</label>
                                            <input id="signup-confirm" type="password" name="password_confirmation"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="Şifre Tekrarı">
                                        </div>
                                    </div>
                                    <!--end::Scroll-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="submit" class="btn btn-primary">
                                            Ekle
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Add task-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    {{--
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1"/>
                        </div>
                    </th>
                    --}}
                    <th class="min-w-125px">User</th>
                    <th class="min-w-125px">Joined Date</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-semibold">
                @foreach($users as $user)
                    <!--begin::Table row-->
                    <tr>
                        {{--
                        <!--begin::Checkbox-->
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <!--end::Checkbox-->
                        --}}
                        <!--begin::User=-->
                        <td class="d-flex align-items-center">
                            <!--begin:: Avatar -->
                            {{--                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">--}}
                            {{--                                <a href="/admin/apps/user-management/users/view">--}}
                            {{--                                    <div class="symbol-label">--}}
                            {{--                                        <img src="assets/media/avatars/300-6.jpg" alt="{{ $user->full_name }}" class="w-100"/>--}}
                            {{--                                    </div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <!--end::Avatar-->
                            <!--begin::User details-->
                            <div class="d-flex flex-column">
                                <a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary mb-1">{{ $user->full_name }}</a>
                                <span>{{ $user->email }}</span>
                            </div>
                            <!--begin::User details-->
                        </td>
                        <!--end::User=-->
                        <!--begin::Joined-->
                        <td>{{ $user->created_at }}</td>
                        <!--begin::Joined-->
                        <!--begin::Action=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                 data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="admin/apps/user-management/users/view" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->
                    </tr>
                    <!--end::Table row-->
                @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->

            {{ $users->links() }}
        </div>
        <!--end::Card body-->
    </div>
@endsection
@push('styles')
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
@endpush
@push('vendor_scripts')
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
@push('custom_scripts')
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
@endpush
