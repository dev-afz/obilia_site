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
                <option value="{{ $option[$valueName] ?? $option }}" @if (($option[$valueName] ?? $option) == $selected) selected @endif
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

</div>
