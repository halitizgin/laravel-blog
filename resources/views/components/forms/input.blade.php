<div class="form-outline mb-4 @error($name) invalid @enderror">
    <label class="form-label" for="{{ $name }}">{{ $title }}</label>
    <input id="{{ $name }}" name="{{ $name }}" class="form-control" required type="{{ $type }}" placeholder="{{ $title }}" value="{{ $value }}" />
    @error($name)
        <small>{{ $message }}</small>
    @enderror
</div>
