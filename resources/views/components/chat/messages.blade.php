@forelse ($messages as $m)
    @if ($m->sender_id == auth()->id())
        <li class="reply">
            <div class="chat-content">
                <p>{{ $m->message }}</p>
                <div class="time d-flex w-100 justify-content-between">
                    <span class="color-white">
                        {{ $m->created_at->format('d M y, h:i a') }}
                    </span>
                    <span class="ms-2 d-flex align-items-center color-white">
                        <i class="fas fa-check-double"></i>
                    </span>

                </div>
            </div>
        </li>
    @else
        <li class="sender">
            <div class="chat-content">
                <p>{{ $m->message }}</p>
                <div class="time d-flex w-100 justify-content-between">
                    <span>
                        {{ $m->created_at->format('d M y, h:i a') }}
                    </span>
                    <span class="ms-2 d-flex align-items-center color-primary">
                        <i class="fas fa-check-double"></i>
                    </span>

                </div>
            </div>

        </li>
    @endif
@empty
@endforelse
