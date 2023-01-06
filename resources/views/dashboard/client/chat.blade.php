<x-dashboard.layout>
    <x-slot name="title"> Chats </x-slot>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset(mix('css/chats.css')) }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/5.3.9/simplebar.css">
        <style>
            .reply-content {
                background: #dfdfdf;
                border-radius: 5px;
                padding: 0px 5px;
                overflow-wrap: break-word;
                border-left: 4px solid #2bb177;
                padding: 10px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                max-height: 140px;
                overflow: auto;
                flex: 1;
            }

            .reply-data {
                max-height: 10rem;
                transition: all 1s ease-in-out;
                height: 0px;
                opacity: 0;
            }
        </style>
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
                                                    <button class="nav-link active" id="Open-tab" data-bs-toggle="tab"
                                                        data-bs-target="#Open" type="button" role="tab"
                                                        aria-controls="Open" aria-selected="true">Open</button>
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
                                                                            class="overflow-dots">{{ $chat->name }}</small>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-square">
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

                                            <div class="reply-data ">
                                                <div style="--bs-gutter-x:0 !important" class="reply-holder row mb-3">
                                                    <div class="reply-content col-11">
                                                        <p class="mb-0 me-4">dsds</p>
                                                    </div>
                                                    <div
                                                        class="cross-btn col-1 d-flex align-items-center justify-content-center">
                                                        <i style="font-size: 2rem" class=" feather-x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <form id="message-box">
                                                <div class="share">
                                                    <button id="share-btn" class="share__btn" type="button"
                                                        title="Share">
                                                        <svg class="share__btn-icon" width="24px" height="24px"
                                                            viewBox="0 0 24 24" aria-hidden="true" disabled="false">
                                                            <g fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                disabled="false">
                                                                <g disabled="false">
                                                                    <polyline class="share__btn-icon-1a"
                                                                        points="8,7 12,3" stroke-dasharray="5.7 5.7"
                                                                        stroke-dashoffset="0" disabled="false">
                                                                    </polyline>
                                                                    <polyline class="share__btn-icon-1b"
                                                                        points="12,3 16,7" stroke-dasharray="5.7 5.7"
                                                                        stroke-dashoffset="0" disabled="false">
                                                                    </polyline>
                                                                    <polyline class="share__btn-icon-1c"
                                                                        points="12,-0.73 12,24"
                                                                        stroke-dasharray="12 12"
                                                                        stroke-dashoffset="-3.73" disabled="false">
                                                                    </polyline>
                                                                </g>
                                                                <g disabled="false">
                                                                    <polyline class="share__btn-icon-2a"
                                                                        points="4,15 4,21" stroke-dasharray="6 6"
                                                                        stroke-dashoffset="0" disabled="false">
                                                                    </polyline>
                                                                    <polyline class="share__btn-icon-2b"
                                                                        points="20,15 20,21" stroke-dasharray="6 6"
                                                                        stroke-dashoffset="0" disabled="false">
                                                                    </polyline>
                                                                    <polyline class="share__btn-icon-2c"
                                                                        points="-4.46,21 21,21"
                                                                        stroke-dasharray="16 16"
                                                                        stroke-dashoffset="-8.46" disabled="false">
                                                                    </polyline>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <ul class="share__links">
                                                        <li class="share__link-item">
                                                            <a class="share__link" href="javascript:void(0)"
                                                                title="Contract">
                                                                <label for="contract">
                                                                    <svg aria-hidden="true" focusable="false"
                                                                        data-prefix="fa-light"
                                                                        data-icon="file-signature"
                                                                        class="svg-inline--fa fa-file-signature fa-w-18"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 576 512">
                                                                        <path
                                                                            d="M560.9 136L536 111.1c-20.25-20.25-53-20.25-73.25 0L303.5 269.8C273.4 299.8 256.1 341.3 256 383.8c-3.875-.25-7.5-2.387-9.375-6.262c-11.88-23.88-46.25-30.38-66-14.12l-13.88-41.63C163.5 311.9 154.4 305.3 144 305.3s-19.5 6.625-22.75 16.5L103 376.4C101.5 381 97.25 384 92.38 384H80C71.13 384 64 391.1 64 400S71.13 416 80 416h12.4c18.62 0 35.1-11.88 40.98-29.5L144 354.6L160.8 405C165.4 418.6 184 419.9 190.3 407.1l7.749-15.38c4-8 15.69-8.5 20.19 .375C225.4 406.6 239.9 415.7 256 415.9L288 416c66.84 0 112.1-46.3 114.1-47.5l158.8-159.3C570.6 199.5 576 186.4 576 172.6C576 158.8 570.6 145.8 560.9 136zM379.5 346C355.3 370.3 322.4 383.9 288 383.9c0-34.38 13.75-67.32 37.1-91.44l120.6-119.9l52.75 52.75L379.5 346zM538.3 186.6L517 207.8L464.3 155l21.12-21.25c7.75-7.625 20.25-7.749 28 0l24.88 24.88C545.9 166.4 545.9 178.9 538.3 186.6zM364.4 448c-6.629 0-13.1 3.795-15.2 10.1C344.1 470.8 333 480 318.1 480h-255.2c-17.62 0-31.89-14.33-31.89-32V64c0-17.67 14.28-32 31.89-32h127.6v112c0 26.51 21.42 48 47.84 48h64.07c8.652 0 15.66-7.037 15.66-15.72V175.7C318.1 167 311.9 160 303.3 160H239.2C230.4 160 223.3 152.8 223.3 144V34.08c4.461 1.566 8.637 3.846 12.08 7.299l89.85 90.14c6.117 6.139 16.04 6.139 22.15 0L347.7 131.1c6.117-6.139 6.117-16.09 0-22.23L257.9 18.75C245.9 6.742 229.7 0 212.8 0H63.93C28.7 0 0 28.65 0 64l.0065 384c0 35.35 28.7 64 63.93 64h255c28.2 0 52.12-18.36 60.55-43.8C382.8 458.2 374.9 448 364.4 448z"
                                                                            fill="currentColor" />
                                                                    </svg>

                                                                </label>
                                                            </a>
                                                        </li>
                                                        <li class="share__link-item">
                                                            <a class="share__link" href="#" title="Image">
                                                                <label for="images">
                                                                    <svg aria-hidden="true" focusable="false"
                                                                        data-prefix="fa-light" data-icon="image"
                                                                        class="svg-inline--fa fa-image fa-w-16"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512">
                                                                        <path
                                                                            d="M324.9 157.8c-11.38-17.38-39.89-17.31-51.23-.0625L200.5 268.5L184.1 245.9C172.7 229.1 145.9 229.9 134.4 245.9l-64.52 89.16c-6.797 9.406-7.75 21.72-2.547 32C72.53 377.5 83.05 384 94.75 384h322.5c11.41 0 21.8-6.281 27.14-16.38c5.312-10 4.734-22.09-1.516-31.56L324.9 157.8zM95.8 352l62.39-87.38l29.91 41.34C191.2 310.2 196.4 313.2 201.4 312.6c5.25-.125 10.12-2.781 13.02-7.188l83.83-129.9L415 352H95.8zM447.1 32h-384C28.65 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM480 416c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V96c0-17.64 14.36-32 32-32h384c17.64 0 32 14.36 32 32V416zM144 192C170.5 192 192 170.5 192 144S170.5 96 144 96S96 117.5 96 144S117.5 192 144 192zM144 128c8.822 0 15.1 7.178 15.1 16S152.8 160 144 160S128 152.8 128 144S135.2 128 144 128z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                    <input type="file" accept="image/*"
                                                                        name="images[]" multiple id="images"
                                                                        hidden="">
                                                                </label>
                                                            </a>
                                                        </li>
                                                        <li class="share__link-item">
                                                            <a class="share__link" href="#" title="Video">
                                                                <label for="videos">
                                                                    <svg aria-hidden="true" focusable="false"
                                                                        data-prefix="fa-light" data-icon="video"
                                                                        class="svg-inline--fa fa-video fa-w-18"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 576 512">
                                                                        <path
                                                                            d="M558.8 99.64c-10.59-5.484-23.37-4.76-33.15 2.099l-102.8 72.04c-7.25 5.062-9 15.05-3.938 22.28C423.1 203.3 433.9 205 441.2 200L544 128v255.9L441.2 312c-7.266-5.047-17.22-3.312-22.28 3.938c-5.062 7.234-3.312 17.22 3.938 22.28l102.8 71.98c5.5 3.844 11.94 5.786 18.38 5.786c5.047 0 10.12-1.203 14.78-3.625C569.4 406.8 576 395.1 576 383.1V128C576 116 569.4 105.2 558.8 99.64zM320 64H64C28.65 64 0 92.65 0 128v256c0 35.35 28.65 64 64 64h256c35.35 0 64-28.65 64-64V128C384 92.65 355.3 64 320 64zM352 384c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V128c0-17.64 14.36-32 32-32h256c17.64 0 32 14.36 32 32V384z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                    <input type="file" accept="video/*"
                                                                        name="videos[]" multiple id="videos"
                                                                        hidden="">
                                                                </label>
                                                            </a>
                                                        </li>
                                                        <li class="share__link-item">
                                                            <a class="share__link" href="#" title="File">
                                                                <label for="files">
                                                                    <svg aria-hidden="true" focusable="false"
                                                                        data-prefix="fa-light" data-icon="paperclip"
                                                                        class="svg-inline--fa fa-paperclip fa-w-12"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 384 512">
                                                                        <path
                                                                            d="M352 112V352c0 88.22-71.78 160-160 160s-160-71.78-160-160V208C32 199.2 39.16 192 48 192S64 199.2 64 208V352c0 70.58 57.42 128 128 128s128-57.42 128-128V112C320 67.89 284.1 32 240 32S160 67.89 160 112V320c0 17.64 14.36 32 32 32s32-14.36 32-32V144C224 135.2 231.2 128 240 128S256 135.2 256 144V320c0 35.3-28.7 64-64 64s-64-28.7-64-64V112C128 50.25 178.3 0 240 0S352 50.25 352 112z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                    <input type="file"
                                                                        accept="application/pdf,application/vnd.ms-excel"
                                                                        name="files[]" id="file" hidden="">
                                                                </label>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <input disabled type="text" name="message" class="form-control"
                                                    aria-label="message…" placeholder="Write message…">
                                                <input type="hidden" required name="id" id="id">
                                                <input type="hidden" required name="to" id="to">
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



    <x-slot name="scripts">
        <script>
            window.me = "{{ auth()->user()->uuid }}";
            const message_url = "{{ route('client.chat.messages') }}";
            const load_url = "{{ route('client.chat.load-messages') }}";
            const send_url = "{{ route('client.chat.send-messages') }}";
        </script>


        <script src="{{ asset(mix('js/chat.js')) }}"></script>
    </x-slot>

</x-dashboard.layout>
