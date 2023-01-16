@pushonce('component-scripts')
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
@endpushonce

@pushonce('component-styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.4/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endpushonce

<div class="file-uploader-container my-5">
    <input type="file" id="{{ $id ?? $name }}" name={{ $name }} id="{{ $name }}">
</div>


@push('lower-scripts')
    <script>
        $(function() {

            // First register any plugins
            $.fn.filepond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateType);

            const uploader_{{ $name }} = $('#{{ $name }}');



            uploader_{{ $name }}.filepond({
                allowFileTypeValidation: true,
                acceptedFileTypes: @json($accept),
                allowMultiple: {{ $multiple }},
                allowDrop: {{ $drop }},
                allowPaste: {{ $paste }},
                allowImagePreview: {{ $preview }},
                maxFiles: {{ $maxFiles }},
                maxFileSize: '{{ $maxFileSize }}',
                onwarning: function(error, file, status) {
                    if (error.code === 1) {
                        Notiflix.Notify.warning('File size is too large');
                    }
                    if (error.code === 2) {
                        Notiflix.Notify.warning('File type is not allowed');
                    }

                    if (error.code === 0) {
                        Notiflix.Notify.warning('You can only upload 1 files at a time');
                    }
                },
                onerror: function(error, file, status) {
                    console.log('==================== FilePond Error ====================');
                    console.log(error);
                    console.log('==================== FilePond Error ====================');
                },
            });


        });
    </script>
@endpush
