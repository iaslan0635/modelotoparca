@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--after-header"></div>
        <div class="block">
            <div class="container container--max--xl">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        @include('account.partials.navigation')
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <form action="{{ route('update-profile') }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-header">
                                    <h5>Profilimi Düzenle</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-7 col-xl-6">
                                            <div class="form-group">
                                                <label for="profile-first-name">First Name</label>
                                                <input type="text" class="form-control" id="profile-first-name" name="first_name" value="{{ old('first_name', auth()->user()->first_name) }}" placeholder="First Name">
                                                @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="profile-last-name">Last Name</label>
                                                <input type="text" class="form-control" id="profile-last-name" name="last_name" placeholder="Last Name" value="{{ old('last_name', auth()->user()->last_name) }}">
                                                @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="profile-email">Email Address</label>
                                                <input type="email" class="form-control" id="profile-email" name="email" placeholder="Email Address" value="{{ old('email', auth()->user()->email) }}">
                                                @error('email') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group mb-0">
                                                <button class="btn btn-primary mt-3">Kaydet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
    <!-- site__body / end -->
@endsection
