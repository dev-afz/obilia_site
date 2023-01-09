<li class="{{ $for }}">
    <div class="chat-content">
        <x-chat.message-dropdown :message="$message" :canDelete="$for === 'reply'" />


        @if ($message->replied)

            <div class="reply-content mb-1">
                @if ($message->replied->message)
                    <p class="mb-0 me-4">{{ $message->replied->message }}</p>
                @endif

                @if (!empty($message->replied->media) && count($message->replied->media) > 0)
                    <div class="reply-image-holder">
                        {{-- {{ json_encode($message->replied) }} --}}
                        @foreach ($message->replied->media as $img)
                            <img class="ms-1 reply-img" src="{{ $img->file }}" alt="">
                        @endforeach
                    </div>
                @endif
            </div>

        @endif




        @forelse ($message->media as $media)
            <img class="chat-img" src="{{ $media->file }}" alt="image">
        @empty
        @endforelse

        @if ($message->message)
            <p class="mb-0 me-4 chat-message">{{ $message->message }}</p>
        @endif

        <div class="time d-flex w-100 justify-content-end">
            <span @class([
                'color-white' => $for == 'reply',
                'opacity-50',
            ])>
                {{ $message->created_at->format('d M y, h:i a') }}
            </span>
            @if ($for == 'reply')
                <span @class([
                    'color-white' => $for == 'reply',
                    'ms-2 d-flex align-items-center ',
                ])>
                    <i class="fas fa-check-double"></i>
                </span>
            @endif
        </div>
    </div>
</li>
