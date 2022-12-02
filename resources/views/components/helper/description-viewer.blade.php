<div class="desc__wrapper ">
    <div class="text-center">
        <button type="button" class="btn btn-sm btn-primary bg-primary " data-bs-toggle="modal"
            data-bs-target="#id-{{ $uuid = mt_rand(99999, 100000000000) }}">
            View
        </button>
    </div>


    <div class="modal fade" id="id-{{ $uuid }}" tabindex="-1" aria-labelledby="{{ $uuid }}Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $uuid }}Label">{{ $title ?? 'Description' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="w-s-normal"> {{ $body ?? 'No Data' }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>
