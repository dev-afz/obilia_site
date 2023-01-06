<div class="dropdown">
    <button class="btn btn-sm btn-link dropdown-toggle position-absolute" type="button"
        id="d-reply-btn-{{ $message->id }}" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-ellipsis-h"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="d-reply-btn-{{ $message->id }}">
        <li>
            <a class="dropdown-item" data-msg-reply="{{ $message->id }}" href="javascript:void(0)">
                <i class="fa fa-reply "></i>
                Reply
            </a>
        </li>
        @if ($canDelete)
            <li>
                <a class="dropdown-item" data-msg-delete="{{ $message->id }}" href="javascript:void(0)">
                    <i class="fa fa-trash "></i>
                    Delete
                </a>
            </li>
        @endif
    </ul>
</div>
