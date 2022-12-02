<div class="form-group {{ $class }}">
    @if ($type !== 'hidden')
        <label class="{{ $labelClass }}">{{ $label ?? ucwords(str_replace('_', ' ', $name)) }}</label>
    @endif
    <div class=" @if ($icon) ls-inputicon-box @endif ">

        @if ($type !== 'textarea')
            <input class="form-control "
                @if ($multiple) name="{{ $name }}[]"@else name="{{ $name }}" @endif
                type="{{ $type }}" @if ($value) value="{{ $value }}" @endif
                @if ($required) required @endif id="{{ $id ?? $name }}"
                @if ($disabled) disabled @endif
                @if (!empty($attrs)) @forelse ($attrs as $key=> $atr) {{ $key }}="{{ $atr }}" @empty @endforelse @endif
                placeholder="{{ $placeholder ?? ucwords(str_replace('_', ' ', $name)) }}" />
            @if ($icon)
                {!! $icon !!}
            @endif
        @else
            <textarea class="form-control "
                @if (!empty($attrs)) @forelse ($attrs as $atr) {{ $atr[0] }}="{{ $atr[1] }}" @empty @endforelse @endif
                @if ($required) required @endif
                @if ($multiple) name="{{ $name }}[]"@else name="{{ $name }}" @endif
                rows="3">{{ $value }}</textarea>

        @endif

    </div>
</div>
