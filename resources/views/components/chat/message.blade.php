<li class="{{ $for }}">
    <div @class(['chat-content', 'has-contract' => $message->contract])>
        <x-chat.message-dropdown :message="$message" :canDelete="$for === 'reply'" />


        @if ($message->replied)

            <div class="reply-content mb-1">
                @if ($message->replied->message)
                    <p class="mb-0 me-4">{{ $message->replied->message }}</p>
                @endif

                @if ($message->replied->contract)
                    <div class="contract-holder p-2">
                        <div class="contract-title">
                            <h4 class="mb-2  text-center">Contract Request</h4>
                            <p>
                                {{ json_decode($message->replied->contract->contract, true)['project_title'] }}
                            </p>
                        </div>

                    </div>
                @endif

                @if (!empty($message->replied->media) && count($message->replied->media) > 0)
                    <div class="reply-image-holder">

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


        @if ($message->contract)
            <div data-contract="{{ $message->contract->id }}" class="contract-holder p-2">
                <div class="contract-title">
                    <h4 class="mb-2  text-center">Contract Request</h4>
                    <p>
                        {{ json_decode($message->contract->contract, true)['project_title'] }}
                    </p>
                </div>
                <div class="contract-btns d-flex gap-1 justify-content-around">
                    <button data-contract-view="{{ $message->contract->contract }}" class="contract-btn btn-view">
                        <i class="feather-eye"></i>
                    </button>
                    @if ($for !== 'reply')
                        @if ($message->contract->status == 'pending')
                            <button data-contract-action="{{ $message->contract->id }}"
                                data-contract-action-type="accept" class="contract-btn btn-accept">
                                <i class="feather-check"></i>
                            </button>
                            <button data-contract-action="{{ $message->contract->id }}"
                                data-contract-action-type="reject" class="contract-btn btn-reject">
                                <i class="feather-x"></i>
                            </button>
                        @endif
                    @endif
                </div>
            </div>
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
