<div class="position-relative">
    <div wire:loading class="position-absolute" style="right: 0; top: 0">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <ul class="nav nav-tabs nav-line-tabs" id="myTab" role="tablist">
        @foreach($rootPermissions as $permission)
            <li class="nav-item" role="presentation">
                @php $id = \Illuminate\Support\Str::slug($permission->name) @endphp
                <button class="d-flex gap-4 nav-link @if($loop->first) active @endif" id="{{$id}}" data-bs-toggle="tab" data-bs-target="#{{$id}}-pane"
                        type="button" role="tab" aria-controls="{{$id}}-pane" aria-selected="true" wire:ignore.self>
                    @include("livewire.admin.partial.permission-checkbox", ["node" => $permission])
                    <span>{{ $permission->name }}</span>
                </button>
            </li>
        @endforeach
    </ul>
    <div class="tab-content" id="myTabContent">
        @foreach($rootPermissions as $permission)
            @php $id = \Illuminate\Support\Str::slug($permission->name) @endphp
            <div class="tab-pane fade @if($loop->first) show active @endif" id="{{$id}}-pane" role="tabpanel" aria-labelledby="{{$id}}" tabindex="0" wire:ignore.self>
                @each('livewire.admin.partial.permission-node', $permission->getChildren(), 'node')
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end mt-4 position-sticky" style="bottom: 2rem">
        <button class="btn btn-primary" wire:click="save" wire:loading.attr="disabled" @unless($isDirty) disabled @endunless>Kaydet</button>
    </div>
</div>

@push('stylesheets')
    <style>
        .permission-checkbox-container {
            position: relative;
            width: fit-content;
        }

        .permission-opitons {
            z-index: 10;
            display: none;
            position: absolute;
            top: -0.3rem;
            left: 50%;
            transform: translate(-50%, 0);
            gap: .5rem;
            flex-wrap: nowrap;
            width: max-content;

            border: 1px solid;
            border-color: var(--kt-dark);
            background-color: var(--bs-body-bg);
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

        li {
            list-style: none;
        }
    </style>
@endpush
