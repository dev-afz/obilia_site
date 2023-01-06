<li class="{{ $for }}">
    <div class="chat-content">
        <x-chat.message-dropdown :message="$message" :canDelete="$for === 'reply'" />
        <p class="mb-0 me-4">{{ $message->message }}</p>
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
