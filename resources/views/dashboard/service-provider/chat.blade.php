<x-dashboard.layout>
    <x-slot:title> Chats </x-slot>
        <x-slot name="styles">
            <link rel="stylesheet" href="{{ asset(mix('css/chats.css')) }}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/5.3.9/simplebar.css">
            <style>
                .offcanvas-end {
                    width: 50%;
                }

                .price-detail {
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 0.5rem;
                }

                .price-breakdown {
                    padding: 1.5rem 2rem;
                    border: 2px dashed #09596f;
                    border-radius: 1rem;
                    margin-bottom: 1rem;
                    background: #f0f6fe;
                }

                .list-unstyled {
                    margin-bottom: 0;
                }

                @media (max-width: 768px) {
                    .offcanvas-end {
                        width: 100%;
                    }
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
                                                        <button class="nav-link active" id="Open-tab"
                                                            data-bs-toggle="tab" data-bs-target="#Open" type="button"
                                                            role="tab" aria-controls="Open"
                                                            aria-selected="true">Open</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="Closed-tab" data-bs-toggle="tab"
                                                            data-bs-target="#Closed" type="button" role="tab"
                                                            aria-controls="Closed"
                                                            aria-selected="false">Archived</button>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="modal-body p-0">
                                                <div class="chat-lists">
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="Open"
                                                            role="tabpanel" aria-labelledby="Open-tab">
                                                            <div class="chat-list">
                                                                @forelse ($active_chats as $chat)
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
                                                                        </div>
                                                                        {{-- <span class="unread-count">4</span> --}}
                                                                    </a>

                                                                @empty

                                                                    <p class="text-danger text-center">No Active chats
                                                                        yet</p>
                                                                @endforelse
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="Closed" role="tabpanel"
                                                            aria-labelledby="Closed-tab">

                                                            <div class="chat-list">

                                                                @forelse ($closed_chats as $chat)
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
                                                                        </div>
                                                                        {{-- <span class="unread-count">4</span> --}}
                                                                    </a>

                                                                @empty

                                                                    <p class="text-danger text-center">No Active chats
                                                                        yet</p>
                                                                @endforelse

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
                                                    <input type="number" class="d-none" hidden name="reply_to"
                                                        id="reply_to">
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



        <x-utils.offcanvas id="create-contract" class="create-contract" position="end" title="Create Contract">
            <form id="create-contract-form">
                <div class="row">
                    <div class="col-md-12">
                        <x-utils.input name="project_title" />
                    </div>
                    <div class="col-md-6">
                        <x-utils.input name="contract_date" type="date" />
                    </div>
                    <div class="col-md-6">
                        <x-utils.input name="project_cost" type="number" />
                    </div>
                    <div class="col-md-12">
                        <x-utils.input name="project_description" type="textarea" />
                    </div>
                    <div class="col-12">
                        <div class="divider">
                            <div class="divider-text">
                                <h4>
                                    Milestone
                                </h4>
                            </div>
                        </div>
                        <x-utils.repeater :minLimit="1" name="milestones"
                            addButtonLabel="<i class='fa fa-plus'></i> Add Milestone"
                            :fields="[
                                ['name' => 'title', 'col' => 12],
                                ['name' => 'amount', 'type' => 'number', 'col' => 6, 'class' => 'milestone-amount'],
                                ['name' => 'due_date', 'type' => 'date', 'col' => 6],
                                ['name' => 'description', 'type' => 'textarea', 'col' => 12],
                            ]" />
                    </div>

                    <div class="col-md-12">
                        <x-utils.input-file name="contract_file" />
                    </div>

                    {{-- <div class="col-md-12">
                        <div class="price-breakdown">

                            <h4 class="price-title text-center">Price Details</h6>
                                <ul class="list-unstyled">
                                    <li class="price-detail">
                                        <div class="detail-title  text-success">Total Contract Value</div>
                                        <div data-contract-amount class="detail-amt  text-success">₹ 0</div>
                                    </li>
                                    <li class="price-detail">
                                        <div class="detail-title">Commission(10%) </div>
                                        <div data-commission class="detail-amt">-₹ 0</div>
                                    </li>

                                </ul>
                                <hr>
                                <ul class="list-unstyled">
                                    <li class="price-detail">
                                        <div class="detail-title detail-total">Receivable Amount</div>
                                        <div data-receivable-amount class="detail-amt fw-bolder">₹ 0</div>
                                    </li>
                                </ul>


                        </div>
                    </div> --}}



                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success btn-lg w-100">
                            Create Contract
                        </button>
                    </div>
                </div>
            </form>
        </x-utils.offcanvas>
        <x-elements.modal title="Contract Data" class="modal-lg" id="contract-details-modal" :footer="false">
            <div id="contract-body">

            </div>
        </x-elements.modal>


        <x-slot name="scripts">
            <script>
                window.me = "{{ auth()->user()->uuid }}";
                const message_url = "{{ route('service-provider.chat.messages') }}";
                const load_url = "{{ route('service-provider.chat.load-messages') }}";
                const send_url = "{{ route('service-provider.chat.send-messages') }}";
                const contract_url = "{{ route('service-provider.contract.store') }}";
            </script>
            <script src="{{ asset(mix('js/chat.js')) }}"></script>
            <script>
                $(document).on('click', '[data-contract-view]', function(e) {
                    e.preventDefault();
                    const id = $(this).data('contract-view');

                    window.rebound({
                        data: {
                            id: id
                        },
                        url: "{{ route('service-provider.contract.view') }}",
                        notification: false,
                        processData: true,
                        successCallback: function(data) {
                            $('#contract-body').html(data.html);
                            $('#contract-details-modal').modal('show');
                        }
                    });
                });
                $(document).on('click', '[data-contract-action]', function(e) {
                    e.preventDefault();
                    const action = $(this).data('contract-action-type');
                    const id = $(this).data('contract-action');
                    window.rebound({
                        data: {
                            action: action,
                            id: id
                        },
                        url: "{{ route('service-provider.contract.action') }}",
                        notification: false,
                        processData: true,
                        successCallback: function(data) {
                            $("[data-messages]").append(data.html);
                            var objDiv = document.getElementById("chat-holder");
                            objDiv.scrollTop = objDiv.scrollHeight;
                            $('#contract-details-modal').modal('hide');

                        }
                    });
                });


                $(document).on('change', '.milestone-amount', function(e) {
                    const allAmounts = $('.milestone-amount').toArray().map((el) => {
                        if (isNaN(parseInt($(el).val()))) {
                            return 0;
                        }
                        return parseInt($(el).val());
                    });
                    const total = (allAmounts.reduce((a, b) => a + b, 0)).toFixed(2);
                    const commission = (total * 0.1).toFixed(2);
                    const receivable = (total - commission).toFixed(2);
                    $('[data-contract-amount]').html('₹ ' + total);
                    $('[data-commission]').html('- ₹ ' + commission);
                    $('[data-receivable-amount]').html('₹ ' + receivable);

                });

                function milestonesRendereCallback() {
                    $('[type="date"]').flatpickr();
                }
            </script>
        </x-slot>

</x-dashboard.layout>
