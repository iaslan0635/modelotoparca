<div class="card card-flush mb-6 mb-xl-9">
    <div class="card-header pt-5">
        <div class="card-title">
            <h2 class="d-flex align-items-center">
                <div class="d-flex align-items-center position-relative my-1" data-toggle="dropdown" aria-expanded="false">
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
                    <input wire:model.live="searchText" type="text" class="form-control form-control-solid w-250px ps-15" placeholder="Kullanıcı ekle"/>
                    <div class="position-absolute" style="right: 1rem; top: 0; bottom: 0; display: none; align-items: center" wire:loading.flex>
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </h2>
        </div>
    </div>
    <div class="card-body pt-4 d-flex flex-column gap-4">
        @foreach($users as $user)
            <div class="d-flex justify-content-between align-items-center">
                <h6>{{ $user->full_name }}</h6>
                <button class="btn btn-primary btn-sm" wire:click="addUser({{$user->id}})">Ekle</button>
            </div>
        @endforeach
    </div>
</div>
