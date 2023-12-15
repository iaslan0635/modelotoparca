<div>
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input {{ $attributes->class(["form-control", "is-invalid" => $errors->has($name)]) }} id="{{ $id }}" name="{{ $name }}"
           value="{{ $value }}" aria-describedby="{{ $id }}-feedback">
    @error($name)
    <div id="{{ $id }}-feedback" class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    @if($hint)
        <div id="emailHelp" class="form-text">{{ $hint }}</div>
    @endif
</div>
