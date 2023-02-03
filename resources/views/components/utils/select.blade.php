<div class="form-group  has-feedback {{ $class }}">
    <label class="{{ $labelClass }}">{{ $label ?? ucwords(str_replace('_', ' ', $name)) }}</label>
    <div class="  @if ($icon) ls-inputicon-box @endif ">
        <select class="wt-select-box selectpicker" @if ($multiple) multiple @endif
            data-live-search="{{ $search }}" title=""
            @if ($multiple) name="{{ $name }}[]" @else name="{{ $name }}" @endif
            id="{{ $id ?? $name }}" required="{{ $required }}" @if ($disabled) disabled @endif
            @if ($showTill) data-selected-text-format="count > {{ $showTill }}" @endif
            @if ($maxSelect) data-max-options="{{ $maxSelect }}" @endif
            @if (!empty($attrs)) @forelse ($attrs as $atr) {{ $atr[0] }}="{{ $atr[1] }}" @empty @endforelse @endif
            data-bv-field="size">
            <option disabled selected>Select {{ ucwords(str_replace('_', ' ', $name)) }}</option>

            @forelse ($options as $option)
                <option value="{{ $option[$valueName] ?? $option }}"
                    @if ($subtext) data-subtext="{{ $option[$subtext] ?? $subtext }}" @endif>
                    @if ($optionPrepend)
                        {!! $option[$optionPrepend] ?? $optionPrepend !!}
                    @endif
                    {{ $option[$optionName] ?? ucwords($option) }}
                </option>
            @empty
                <option disabled selected value="">No options available</option>
            @endforelse


        </select>
        @if ($icon)
            {!! $icon !!}
        @endif
    </div>
    @if ($maxSelect)
        <small class="text-muted">*You can select maximum {{ $maxSelect }} options</small>
    @endif

</div>


@push('component-scripts')
    @if ($selected)
        <script>
            $(document).ready(function() {
                $('#{{ $id ?? $name }}').selectpicker('val', @json($selected));
            });
        </script>
    @endif
@endpush
