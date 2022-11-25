<div class="form-group  {{ $class }} ">

    <div style="--uploader__width: {{ $width }};--uploader_height:{{ $height }}"
        class="dashboard-profile-pic">
        <div class="dashboard-profile-photo">
            <img src="https://via.placeholder.com/200"
                alt="{{ $label ?? 'Upload ' . ucwords(str_replace('_', ' ', $name)) }}">
            <div class="upload-btn-wrapper text-start">
                <div class="upload__image__wrapper" id="upload-image-grid-{{ $id ?? $name }}"></div>
                <button
                    class="site-button button-sm">{{ $label ?? 'Upload ' . ucwords(str_replace('_', ' ', $name)) }}</button>
                <input required="{{ $required }}"
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
