<div class="form-group  {{ $class }} ">

    <div style="--uploader__width: {{ $width }}px;--uploader_height:{{ $height }}px"
        class="dashboard-profile-pic">
        <div class="dashboard-profile-photo">
            <img src="{{ $image ?? 'https://via.placeholder.com/' . $width . 'x' . $height }}"
                alt="{{ $label ?? 'Upload ' . ucwords(str_replace('_', ' ', $name)) }}">
            <div class="upload-btn-wrapper text-start">
                <div class="upload__image__wrapper" id="upload-image-grid-{{ $id ?? $name }}"></div>
                <button type="button"
                    class="site-button button-sm">{{ $label ?? 'Upload ' . ucwords(str_replace('_', ' ', $name)) }}</button>
                <input @if ($required) required @endif
                    @if (!empty($attrs)) @forelse ($attrs as $atr) data-{{ $atr['name'] }}="{{ $atr['value'] }}" @empty @endforelse @endif
                    type="file" name="{{ $name }}" id="{{ $id ?? $name }}" accept="{{ $accept }}">
            </div>
        </div>
        @if ($instructions)
            <p> {!! $instructions !!}</p>
        @endif
    </div>

</div>


@pushonce('component-scripts')
    <script>
        const impagePreviewer = (wrapper, input) => {
            const fileUploader = document.getElementById(input);
            const reader = new FileReader();
            const imageGrid = document.getElementById(wrapper);
            if (fileUploader) {
                fileUploader.addEventListener('change', (event) => {
                    const files = event.target.files;
                    const file = files[0];

                    const img = document.createElement('img');
                    imageGrid.appendChild(img);
                    img.src = URL.createObjectURL(file);
                    img.alt = file.name;
                });
            }
        }
    </script>
@endpushonce


@push('component-scripts')
    <script>
        impagePreviewer('upload-image-grid-{{ $id ?? $name }}', '{{ $id ?? $name }}');
    </script>
@endpush
