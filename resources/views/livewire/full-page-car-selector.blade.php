<div class="site__body container">
    <div class="loading-overlay" wire:loading.block wire:loading.delay>
        Yükleniyor...
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <button class="btn btn-secondary" wire:click="back()">
                <i class="fa fa-arrow-left ms-1"></i>
                Geri
            </button>
        </div>
    </div>
    <div class="row mt-2">
        @foreach($items as ['name' => $name, 'image' => $image, 'action' => $action])
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="auto-item" wire:click="{{ $action }}">
                    <img src="{{ $image }}" class="auto-item__image">
                    <div class="auto-item__name">
                        <span>{{ $name }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('styles')
    <style>
        body {
            position: relative;
        }

        .loading-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            color : white;
            font-size: 2rem;
            cursor: wait;
        }

        .auto-item__image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            margin-right: 30px;
        }

        .auto-item {
            align-items: center;
            background: #eee;
            box-sizing: border-box;
            display: flex;
            height: 84px;
            margin: 0 0 20px;
            padding: 10px 60px 10px 15px;
            position: relative;
            text-decoration: none;
            transition: all .25s ease;
            -webkit-transition: all .25s ease;
            -moz-transition: all .25s ease;
            -o-transition: all .25s ease;

            cursor: pointer;
        }

        .auto-item:hover {
            background: #20548e;
        }

        .auto-item:hover .auto-item__name {
            color: #fff;
        }

        .auto-item__name {
            align-items: center;
            color: #20548e;
            display: flex;
            font-size: 16px;
            font-weight: 500;
            height: 60px;
            line-height: 20px;
            overflow: hidden;
            width: 100%;
            font-family: Roboto, Calibri, serif;
        }

        .auto-item__name span {
            max-height: 100%;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .auto-item:after {
            background: #20548e;
            border-radius: 50%;
            content: "";
            display: block;
            height: 14px;
            margin-top: -7px;
            position: absolute;
            right: 30px;
            top: 50%;
            width: 14px;
        }

        .auto-item:before {
            border-bottom: 3px solid transparent;
            border-left: 4px solid #fff;
            border-top: 3px solid transparent;
            content: "";
            display: block;
            height: 0;
            margin-top: -3px;
            position: absolute;
            right: 34px;
            top: 50%;
            width: 0;
            z-index: 1;
        }

        .auto-item:hover:after {
            background: #fff
        }

        .auto-item:hover:before {
            border-left: 4px solid #20548e
        }
    </style>
@endpush
