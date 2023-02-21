@if ($for === 'sender')
    <li class="sent">


        <div class="chat-content">
            <div class="dropdown">
                <button class="btn btn-sm btn-link dropdown-toggle reply-btn" type="button"
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

                    <li>
                        <a class="dropdown-item" data-msg-delete="{{ $message->id }}" href="javascript:void(0)">
                            <i class="fa fa-trash "></i>
                            Delete
                        </a>
                    </li>

                </ul>
            </div>


            @if ($message->replied)
                <div class="message-reply">

                    @if ($message->replied->media->count() > 0)
                        <div class="chat-images">
                            @forelse ($message->replied->media as $media)
                                <img class="chat-img" src="{{ $media->file }}" alt="image">
                            @empty
                            @endforelse
                        </div>
                    @endif
                    @if ($message->replied->message)
                        <p class="mb-0">
                            {{ $message->replied->message }}
                        </p>
                    @endif


                </div>

            @endif




            @if ($message->media->count() > 0)
                <div class="chat-images">
                    @forelse ($message->media as $media)
                        <img class="chat-img" src="{{ $media->file }}" alt="image">
                    @empty
                    @endforelse
                </div>
            @endif
            @if ($message->message)
                <div class="chat-text">
                    <p class="m-0">
                        {{ $message->message }}
                    </p>
                </div>
            @endif

        </div>
        <small class="chat-time">
            {{ $message->created_at->format('h:i A') }}
            <span class="ms-1">
                <i class="fas fa-check-double"></i>
            </span>
        </small>
    </li>
@else
    <li class="received">

        <div class="chat-content">
            <div class="dropdown">
                <button class="btn btn-sm btn-link dropdown-toggle  reply-btn" type="button"
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
                </ul>
            </div>
            @if ($message->replied)
                <div class="message-reply">


                    @if ($message->replied->media->count() > 0)
                        <div class="chat-images">
                            @forelse ($message->replied->media as $media)
                                <img class="chat-img" src="{{ $media->file }}" alt="image">
                            @empty
                            @endforelse
                        </div>
                    @endif
                    @if ($message->replied->message)
                        <p class="mb-0">
                            {{ $message->replied->message }}
                        </p>
                    @endif
                </div>

            @endif
            @if ($message->media->count() > 0)
                <div class="chat-images">
                    @forelse ($message->media as $media)
                        <img class="chat-img" src="{{ $media->file }}" alt="image">
                    @empty
                    @endforelse
                </div>
            @endif
            @if ($message->message !== null)
                <div class="chat-text">
                    <p class="m-0">
                        {{ $message->message }}
                    </p>
                </div>
            @endif
        </div>
        <small class="chat-time">
            {{ $message->created_at->format('h:i A') }}
        </small>
    </li>
@endif
