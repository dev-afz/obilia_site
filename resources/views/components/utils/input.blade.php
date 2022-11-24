<div class="form-group {{ $class }}">
    <label>{{ $label ?? ucwords(str_replace('_', ' ', $name)) }}</label>
    <div class=" @if ($icon) ls-inputicon-box @endif ">

        @if ($type !== 'textarea')
            <input class="form-control " name="{{ $name }}" type="{{ $type }}" value="{{ $value }}"
                required="{{ $required }}" id="{{ $id ?? $name }}" @if ($disabled) disabled @endif
                @if (!empty($attrs)) @forelse ($attrs as $atr) {{ $atr[0] }}="{{ $atr[1] }}" @empty @endforelse @endif
                placeholder="Enter {{ $placeholder ?? ucwords(str_replace('_', ' ', $name)) }}">
            @if ($icon)
                {!! $icon !!}
            @endif
        @else
            <textarea class="form-control "
                @if (!empty($attrs)) @forelse ($attrs as $atr) {{ $atr[0] }}="{{ $atr[1] }}" @empty @endforelse @endif
                required="{{ $required }}" name="{{ $name }}" rows="3">{{ $value }}</textarea>

        @endif

    </div>
</div>
