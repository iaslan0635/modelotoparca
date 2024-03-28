@extends("admin.inhouse.layouts.card")
@section("card-title", "Marka Düzenle")
@section("card-content")
    <form action="{{ route("admin.brands.update") }}" method="POST">
        @csrf
        @method("PUT")
        <input type="hidden" name="id" value="{{ $brand->id }}">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row g-10">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">İsim</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') ?? $brand->name }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">URL</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug') ?? $brand->slug }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="botname">Bottaki İsmi</label>
                    <input type="text" name="botname" class="form-control" value="{{ old('botname') ?? $brand->botname }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Resim</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary">Kaydet</button>
            </div>
        </div>

    </form>
@endsection
