@php
    $total_cols = 0;
@endphp

<div class="col-12" id="container-{{ $name }}">
    <div class="row">

        <div class="col-12">
            <div class="row container-item-{{ $name }}">
                @forelse ($fields as $f)
                    @php
                        $total_cols += $f['col'] ?? 6;
                    @endphp
                    @if (empty($f['type']))
                        @php
                            $f['type'] = 'text';
                        @endphp
                    @endif
                    @if ($f['type'] !== 'select')
                        <div class="col-md-{{ $f['col'] ?? 6 }} col-12 ">
                            <x-utils.input required="{{ $f['required'] ?? 'true' }}" type="{{ $f['type'] ?? 'text' }}"
                                id="{{ $name }}_{{ $f['name'] }}"
                                label="{{ ucwords(str_replace('_', ' ', $f['name'])) }}"
                                placeholder="{{ ucwords(str_replace('_', ' ', $f['name'])) }}"
                                name="{{ $name }}[][{{ $f['name'] }}]" />
                        </div>
                    @endif
                    @if ($f['type'] === 'select')
                        <div class="col-md-{{ $f['col'] ?? 6 }} col-12 ">
                            <x-utils.select name="{{ $f['name'] }}" :options="$f['options']" />
                        </div>
                    @endif
                @empty
                @endforelse
                {{ $data ?? '' }}


                <div @class([
                    'col-12 d-flex align-items-center justify-content-center',
                    'col-md-' . (12 - ($total_cols % 12)) => $total_cols % 12,
                    'justify-content-center mb-5 w-100 d-block' => !($total_cols % 12),
                ])>

                    <button @class([
                        'btn btn-lg btn-outline-danger remove-item-' . $name,
                        'w-100 d-block ' => !($total_cols % 12),
                    ]) type="button">
                        <i class="fa fa-trash"></i>
                    </button>

                </div>

                <hr class="mb-2">

            </div>
        </div>
    </div>
</div>
<div class="col-12 text-center mt-2">
    <button id="add-more-{{ $name }}" type="button" class="btn text-white  btn-info btn-lg ">
        @if ($addButtonLabel)
            {!! $addButtonLabel !!}
        @else
            <i class="fa fa-plus"></i>
        @endif
    </button>
</div>

@pushonce('component-scripts')
    <script src="{{ asset(mix('js/repeater.js')) }}"></script>
@endpushonce


@push('lower-scripts')
    <script>
        // jQuery cloneData.js
        $('#add-more-{{ $name }}').cloneData({
            mainContainerId: 'container-{{ $name }}',
            cloneContainer: 'container-item-{{ $name }}',
            removeButtonClass: 'remove-item-{{ $name }}',
            removeConfirm: true,
            removeConfirmMessage: 'Are you sure want to delete?',
            append: '',
            maxLimit: {{ $maxLimit }},
            minLimit: {{ $minLimit }},
            defaultRender: 1,
            afterRender: function() {
                // call $name."RendereCallback" if exits
                if (typeof window["{{ $name }}RendereCallback"] === "function") {
                    window["{{ $name }}RendereCallback"]();
                }
            },
        });



        @if ($minLimit > 1)

            @for ($i = 1; $i < $minLimit; $i++)
                $('#add-more-{{ $name }}').trigger('click');
            @endfor
        @endif
    </script>
@endpush
