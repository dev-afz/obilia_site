<x-dashboard.layout>
    <x-slot:title> Chats </x-slot>
        <x-slot name="styles">
            <link rel="stylesheet" href="{{ asset(mix('css/chats.css')) }}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/5.3.9/simplebar.css">
        </x-slot>
        <div id="content">
            <!-- char-area -->
            <section class="message-area p-0">
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="chat-area">
                                <div class="chatlist">
                                    <div class="modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="chat-header">
                                                <div class="msg-search">
                                                    <input type="text" class="form-control" id="inlineFormInputGroup"
                                                        placeholder="Search" aria-label="search">
                                                    <a class="add btn-icon" href="#">
                                                        <i class="feather-plus"></i>
                                                    </a>
                                                </div>

                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="Open-tab"
                                                            data-bs-toggle="tab" data-bs-target="#Open" type="button"
                                                            role="tab" aria-controls="Open"
                                                            aria-selected="true">Open</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="Closed-tab" data-bs-toggle="tab"
                                                            data-bs-target="#Closed" type="button" role="tab"
                                                            aria-controls="Closed" aria-selected="false">Closed</button>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="modal-body p-0">
                                                <div class="chat-lists">
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="Open"
                                                            role="tabpanel" aria-labelledby="Open-tab">
                                                            <div class="chat-list">
                                                                @forelse ($chats as $chat)
                                                                    <a href="#" data-chat="{{ $chat->uuid }}"
                                                                        class="d-flex align-items-center chat__item">
                                                                        <div class="flex-shrink-0">
                                                                            <img class="img-fluid rounded-circle chat-avatar"
                                                                                height="50px" width="50px"
                                                                                src="{{ $chat->participant->user->images ?? 'https://ui-avatars.com/api/?name=' . $chat->participant->user->name }}"
                                                                                alt="user img">
                                                                        </div>
                                                                        <div class="flex-grow-1 ms-3">
                                                                            <h3>{{ $chat->participant->user->name }}
                                                                            </h3>
                                                                            <small
                                                                                class="overflow-dots">{{ $chat->job->title }}</small>
                                                                        </div>
                                                                        {{-- <span class="unread-count">4</span> --}}
                                                                    </a>

                                                                @empty

                                                                    <p class="text-danger text-center">No chats yet</p>
                                                                @endforelse
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="Closed" role="tabpanel"
                                                            aria-labelledby="Closed-tab">

                                                            <div class="chat-list">

                                                                <p class="text-danger text-center">for future use</p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chatbox">
                                    <div class="modal-dialog-scrollable">
                                        <div class="empty__box">
                                            <div class="p-5 w-75 rounded-3 bg-white text-center">
                                                <span class="d-inline-block mb-3 message__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-message-square">
                                                        <path
                                                            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <h3>Start a conversation</h3>
                                                <p>Click on a user to start a conversation</p>
                                            </div>
                                        </div>
                                        <div hidden class="modal-content d-none skeleton">
                                            <div class="msg-head ">
                                                <x-chat.message-head />
                                            </div>

                                            <div id="chat-holder" class="modal-body">
                                                <div class="chat-loading-state d-none">
                                                    <div class="loader-container">
                                                        <div class="loader"></div>
                                                    </div>
                                                </div>
                                                <div class="msg-body">
                                                    <ul data-messages="">
                                                        <x-chat.message-loader />
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="send-box">

                                                <div class="reply-data reply-data-collapsed ">
                                                    <div style="--bs-gutter-x:0 !important"
                                                        class="reply-holder row mb-3">
                                                        <div class="reply-content col-11">

                                                        </div>
                                                        <div id="close-reply"
                                                            class="cross-btn col-1 d-flex align-items-center justify-content-center">

                                                            <button class="no-style">

                                                                <i style="font-size: 1.5rem"
                                                                    class=" feather-x m-0 all"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <form id="message-box">
                                                    <x-chat.share-btn />
                                                    <input disabled type="text" name="message"
                                                        class="form-control" aria-label="message…"
                                                        placeholder="Write message…">
                                                    <input type="hidden" required name="id" id="id">
                                                    <input type="hidden" required name="to" id="to">
                                                    <input type="hidden" name="reply_to" id="reply_to">
                                                    <button disabled class="send__btn" type="submit"><i
                                                            class="fa fa-paper-plane" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- char-area -->

        </div>

        <x-elements.modal id="upload-modal" :footer="false">
            <div id="uploader-body">

            </div>
        </x-elements.modal>

        <x-slot name="scripts">
            <script>
                window.me = "{{ auth()->user()->uuid }}";
                const message_url = "{{ route('service-provider.chat.messages') }}";
                const load_url = "{{ route('service-provider.chat.load-messages') }}";
                const send_url = "{{ route('service-provider.chat.send-messages') }}";
            </script>
            <script src="{{ asset(mix('js/chat.js')) }}"></script>
            <script>
                $(document).on('click', '[data-msg-reply]', function(e) {
                    e.preventDefault();
                    const id = $(this).data('msg-reply');
                    const message = $(this).closest('.chat-content').find('.chat-message').text();
                    $('.reply-data .reply-message').text(message);
                    $('.reply-data')
                        .removeClass('reply-data-collapsed')
                        .addClass('h-auto');
                    console.log(id, message);
                });

                $('#close-reply').click(function(e) {
                    e.preventDefault();
                    $('.reply-data')
                        .addClass('reply-data-collapsed')
                        .removeClass('h-auto');

                    setTimeout(() => {
                        $('.reply-data .reply-message').text('');
                    }, 1000);

                });
            </script>
        </x-slot>

</x-dashboard.layout>
