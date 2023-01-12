<div class="modal fade {{ $parentClass ?? '' }}" id="{{ $id }}" tabindex="-1"
    aria-labelledby="{{ $id }}Label" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog {{ $class }}  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>

            @if ($footer)
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            @endif
        </div>
    </div>
</div>
