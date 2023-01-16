<div class="form-group {{ $parentClass }}">
    @if ($hasLabel)
        <label for="{{ $id ?? $name }}">{{ Str::ucfirst(Str::replace('_', ' ', $name)) }}</label>
    @endif
    <div class="custom-file">
        <input type="file" @if ($required) required @endif
            @if ($multiple) multiple name="{{ $name }}[]" @else name="{{ $name }}" @endif
            @forelse ($attrs as $key=> $attr ) {{ $key }}="{{ $attr }}"
            @empty @endforelse
            class="form-control {{ $class }}" id="{{ $id ?? $name }}">

        <div class="invalid-tooltip">Please provide a valid {{ Str::ucfirst(Str::replace('_', ' ', $name)) }}</div>
    </div>

</div>
