<x-workspace.layout>
    <x-slot name="title">
        {{ $workspace->name }}
    </x-slot>

    <x-slot name="styles">
        <link rel="stylesheet" href="https://rawcdn.githack.com/nextapps-de/winbox/0.2.6/dist/css/winbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css">
        <style>
            .chat-section {
                padding: 0;
            }

            .price-detail {
                display: flex;
                justify-content: space-between;
                margin-bottom: 0.5rem;
            }

            .price-breakdown {
                padding: 1rem !important;
                border: 2px dashed #09596f;
                border-radius: 1rem;
                margin: 0rem !important;
                background: #f0f6fe;
            }

            .notiflix-confirm-content {
                padding: 1rem !important;
            }

            .list-unstyled {
                margin-bottom: 0;
            }
        </style>
    </x-slot>

    <div class="row ">
        <div class="col-md-6 ">
            <div class="divider">
                <div class="divider-text">
                    <h4>
                        Project Progress
                    </h4>
                </div>
            </div>
            <div class="card p-3">
                <div style="--progress:{{ number_format(($workspace->contract->milestones->whereNotNull('escrow_fund_released_time')->count() / $workspace->contract->milestones->count()) * 100, 2) }}%"
                    class="progress-bar">
                    <p class="text-white m-0">
                        {{ number_format(($workspace->contract->milestones->whereNotNull('escrow_fund_released_time')->count() / $workspace->contract->milestones->count()) * 100, 2) }}%
                    </p>
                </div>
            </div>
            <div class="divider">
                <div class="divider-text">
                    <h4>
                        Project Timeline
                    </h4>
                </div>
            </div>
            <div class="card p-5 bg-blue ">

                @php
                    $latestMilestone = '';
                    $found = true;
                @endphp
                <ul class="timeline">
                    @forelse ($workspace->contract->milestones as $milestone)
                        @php
                            
                            if ($latestMilestone !== $milestone->id && $milestone->escrow_fund_released_time === null && $found) {
                                $latestMilestone = $milestone->id;
                                $found = false;
                            }
                            
                        @endphp

                        <li @class(['timeline-item', 'timeline-done' => $found == 'completed'])>
                            <span @class([
                                'timeline-point timeline-point-indicator',
                                'pulse' => $milestone->id == $latestMilestone,
                            ])></span>
                            <div class="timeline-event">
                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 ">
                                    <h4>{{ $milestone->title }}</h4>
                                    <span class="timeline-event-time">
                                        @if ($milestone->due_date)
                                            <Strong>Date: </Strong> &nbsp;
                                            {{ \Carbon\Carbon::parse($milestone->due_date)->format('M d, Y') }}
                                        @endif
                                    </span>
                                </div>
                                {{-- <p>
                                    {{ $milestone->description }}
                            </p> --}}
                                <div class="d-flex flex-row align-items-center justify-content-around mt-2">
                                    @if ($milestone->escrow_fund_added_time)
                                        <small class="text-success me-1">Fund Added :
                                            {{ \Carbon\Carbon::parse($milestone->escrow_fund_added_time)->diffForHumans() }}</small>
                                    @else
                                        <button
                                            @if ($milestone->id !== $latestMilestone) disabled @else
                                    data-add-fund="{{ $milestone->id }}" @endif
                                            @class(['btn btn-sm btn-primary me-4'])>
                                            Add Fund
                                        </button>
                                    @endif

                                    @if ($milestone->escrow_fund_released_time)
                                        <span class="badge bg-success me-1">Fund Released</span>
                                    @else
                                        @if ($milestone->works->count() > 0)
                                            <button
                                                @if ($milestone->id !== $latestMilestone || $milestone->escrow_fund_added_time === null) disabled
                                    @else
                                    data-check-work="{{ $milestone->id }}" @endif
                                                @class(['btn btn-sm btn-secondary me-4'])>
                                                Check & Release Fund
                                            </button>
                                        @else
                                            @if ($milestone->id === $latestMilestone)
                                                <span class="badge bg-danger me-1">
                                                    No Work Done yet
                                                </span>
                                            @endif
                                        @endif
                                    @endif


                                </div>
                            </div>
                        </li>
                    @empty
                    @endforelse

                    <div class="divider">
                        <div class="divider-text">
                            <p>Milestone Requests</p>
                        </div>
                    </div>

                    @forelse ($workspace->contract->milestone_requests as $request)
                        <li>

                            @if (!$loop->first)
                                <hr>
                            @endif


                            <div class="timeline-event mt-2">
                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 ">
                                    <h4>{{ json_decode($request->milestone, true)['title'] }}</h4>
                                    <span class="timeline-event-time">
                                        @if (json_decode($request->milestone, true)['due_date'])
                                            <Strong>Date: </Strong> &nbsp;
                                            {{ \Carbon\Carbon::parse(json_decode($request->milestone, true)['due_date'])->format('M d, Y') }}
                                        @endif
                                    </span>
                                </div>
                                @if (auth()->user()->id !== $request->requested_by && $request->status === 'pending')
                                    <div class="d-flex flex-row align-items-center justify-content-end mt-2">
                                        <button data-request-id="{{ $request->id }}" data-action-request="approved"
                                            class="btn btn-sm btn-success me-2">
                                            Approve
                                        </button>
                                        <button data-request-id="{{ $request->id }}" data-action-request="rejected"
                                            class="btn btn-sm btn-danger ">
                                            Reject
                                        </button>
                                    </div>
                                @else
                                    <div class="d-flex flex-row align-items-center justify-content-end mt-2">
                                        @switch($request->status)
                                            @case('pending')
                                                Status &nbsp;<span class="badge bg-warning me-1">
                                                    Pending
                                                </span>
                                            @break

                                            @case('accepted')
                                                Status &nbsp; <span class="badge bg-success me-1">
                                                    Accepted
                                                </span>
                                            @break

                                            @case('rejected')
                                                Status &nbsp; <span class="badge bg-danger me-1">
                                                    Rejected
                                                </span>
                                            @break

                                            @default
                                        @endswitch
                                    </div>
                                @endif
                            </div>
                        </li>
                        @empty
                        @endforelse

                        <li class="text-center mt-4">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas"
                                data-bs-target="#request-milestone">
                                Request Milestone
                            </button>
                        </li>
                    </ul>
                </div>


            </div>
            <div hidden class="d-none">
                <div id="chat-sec" class="chat-section">
                    <div class="chat-container card">
                        <div class="chat-header">
                            <div class="chat-avatar">
                                <img src="{{ $workspace->owner->images ?? 'https://ui-avatars.com/api/?name=' . $workspace->owner->name }}"
                                    alt="">
                            </div>
                            <div class="chat-name">
                                <strong class="mb-0 fs-5 d-block">
                                    {{ $workspace->owner->name }}
                                </strong>
                            </div>
                        </div>
                        <ul id="chat-holder" class="chat-body">

                        </ul>
                        <form id="chat-form">
                            <div id="chat-bottom-sheet" class="slide-up">
                                <div style="--bs-gutter-x:0 !important" class="reply-sheet-holder row">
                                    <div class="col-11 p-3">
                                        <div class="reply-content ">
                                            <p class="mb-0">hi</p>
                                        </div>
                                    </div>
                                    <div id="close-reply"
                                        class="cross-btn col-1 d-flex align-items-center justify-content-center">

                                        <button type="button" data-sheet-close class="btn-close"
                                            aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box">
                                <input type="file" accept="image/*" name="image" id="image" class="d-none">
                                <label for="image" class="chat-attach">
                                    <i class="fas fa-paperclip"></i>
                                </label>
                                <input id="message" name="message" type="text" class="chat-input">
                                <input type="hidden" name="reply_to" id="reply_to">
                                <button type="submit" class="chat-send">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                        data-icon="paper-plane" class="svg-inline--fa fa-paper-plane fa-w-16" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M501.6 4.186c-7.594-5.156-17.41-5.594-25.44-1.063L12.12 267.1C4.184 271.7-.5037 280.3 .0431 289.4c.5469 9.125 6.234 17.16 14.66 20.69l153.3 64.38v113.5c0 8.781 4.797 16.84 12.5 21.06C184.1 511 188 512 191.1 512c4.516 0 9.038-1.281 12.99-3.812l111.2-71.46l98.56 41.4c2.984 1.25 6.141 1.875 9.297 1.875c4.078 0 8.141-1.031 11.78-3.094c6.453-3.625 10.88-10.06 11.95-17.38l64-432C513.1 18.44 509.1 9.373 501.6 4.186zM369.3 119.2l-187.1 208.9L78.23 284.7L369.3 119.2zM215.1 444v-49.36l46.45 19.51L215.1 444zM404.8 421.9l-176.6-74.19l224.6-249.5L404.8 421.9z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <x-elements.modal title="work" :footer="false" class="modal-lg" id="work-modal">

                <div id="work-body">

                </div>


            </x-elements.modal>
            <x-utils.offcanvas id="request-milestone" class="request-milestone" position="end"
                title="Request Milestone">
                <form id="request-milestone-form">
                    <div class="row">
                        <div class="col-12">
                            <x-utils.input type="text" name="title" />
                        </div>
                        <div class="col-12">
                            <x-utils.input type="number" name="amount" />
                        </div>
                        <div class="col-12">
                            <x-utils.input type="date" name="due_date" />
                        </div>
                        <div class="col-12">
                            <x-utils.input type="textarea" name="description" />
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success btn-lg w-100">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </x-utils.offcanvas>
        </div>



        <x-slot name="scripts">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
            <script>
                window.me = '{{ auth()->user()->id }}';
                window.workspace = '{{ $workspace->id }}';
                const message_url = "{{ route('client.workspace.chat.messages') }}";
                const load_url = "{{ route('client.workspace.chat.load-messages') }}";
                const send_url = "{{ route('client.workspace.chat.send-messages') }}";
            </script>
            <script src="{{ asset(mix('js/workspace/chat.js')) }}"></script>
            <script src="https://rawcdn.githack.com/nextapps-de/winbox/0.2.6/dist/js/winbox.min.js"></script>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
                const workspace = @json($workspace);
                new PerfectScrollbar('#chat-holder', {
                    wheelSpeed: 2,
                    wheelPropagation: true,
                    minScrollbarLength: 20
                });
                new WinBox("Chat", {
                    mount: document.getElementById("chat-sec"),
                    height: "80%",
                    width: "500px",
                    x: 'right',
                    y: 'bottom',
                    background: '#09596f',
                    onclose: function(force) {
                        return !force && !confirm("Close window?");
                    }

                });

                Notiflix.Confirm.init({
                    plainText: false,
                    messageMaxLength: 1000000,
                    width: '40rem',
                    borderRadius: '10px',
                })

                $('[data-add-fund]').click(function(e) {
                    e.preventDefault();
                    const user = @json(auth()->user());
                    const milestone_id = $(this).data('add-fund');

                    window.rebound({
                        url: "{{ route('client.workspace.payment.create-order') }}",
                        data: {
                            milestone_id: milestone_id
                        },
                        processData: true,
                        notification: false,
                        successCallback: function(response) {
                            console.log(response);
                            // payOrder(user, response.order);

                            // const final_amount = response.order.amount;
                            // const cgst = response.order.cgst;
                            // const sgst = response.order.sgst;
                            // const amount = JSON.parse(response.order.for_data).cost;

                            // const gst_amount = (amount * (cgst + sgst)) / 100;


                            // Notiflix.Confirm.show(
                            //     'Price Breakdown',
                            //     `<div class="price-breakdown">
                //             <ul class="list-unstyled">
                //                 <li class="price-detail">
                //                     <div class="detail-title  text-success">Milestone Amount</div>
                //                     <div data-contract-amount class="detail-amt  text-success">₹ ${amount}</div>
                //                 </li>
                //                 <li class="price-detail">
                //                     <div class="detail-title">GST(${cgst+sgst}%) </div>
                //                     <div data-commission class="detail-amt">+₹ ${gst_amount}</div>
                //                 </li>

                //             </ul>
                //             <hr>
                //             <ul class="list-unstyled">
                //                 <li class="price-detail">
                //                     <div class="detail-title detail-total">Payable Amount</div>
                //                     <div data-receivable-amount class="detail-amt fw-bolder">₹ ${final_amount}</div>
                //                 </li>
                //             </ul>
                //         </div>`,
                            //     'Pay Now',
                            //     'Cancel',
                            //     function() {
                            //         payOrder(user, response.order);
                            //     },
                            //     function() {
                            //         Notiflix.Notify.failure('Payment Cancelled');
                            //     }
                            // );

                            payOrder(user, response.order);

                        }
                    })

                });




                function payOrder(user, order) {
                    const options = {
                        "key": "{{ env('RAZORPAY_KEY') }}",
                        "name": "Obillia",
                        "description": "Test Transaction",
                        "image": "https://obilia.fra1.digitaloceanspaces.com/public/images/user/kyc/img-319ab28e832a5e19c3d14a606d90b95820c032a67cc.550460.png",
                        "order_id": order.order_id,
                        "callback_url": "{{ route('client.workspace.payment.fetch') }}",
                        "prefill": {
                            "name": user.name,
                            "email": user.email,
                            "contact": 9137231270
                        },
                        "notes": {
                            "test": "test"
                        },
                        "theme": {
                            "color": "#3399cc"
                        }
                    };
                    const rzp = new Razorpay(options);
                    rzp.open();
                }

                $('[data-check-work]').click(function(e) {
                    e.preventDefault();
                    const milestone_id = $(this).data('check-work');
                    window.rebound({
                        url: "{{ route('client.workspace.milestone.view-work') }}",
                        data: {
                            milestone_id: milestone_id
                        },
                        processData: true,
                        notification: false,
                        successCallback: function(response) {
                            $('#work-body').html(response.html);
                            $('#work-modal').modal('show');
                        }
                    })


                });


                $(document).on('click', '[data-work-action]', function(e) {
                    e.preventDefault();
                    const action = $(this).data('work-action');
                    const work = $(this).data('work');

                    window.rebound({
                        url: "{{ route('client.workspace.milestone.work-action') }}",
                        data: {
                            work: work,
                            action: action
                        },
                        processData: true,
                        notification: false,
                        successCallback: function(response) {
                            $('#work-body').html('');
                            $('#work-modal').modal('hide');
                            location.reload();
                        }
                    })

                });


                $('#request-milestone-form').submit(function(e) {
                    e.preventDefault();
                    window.rebound({
                        url: "{{ route('client.workspace.milestone.request-milestone') }}",
                        form: this,
                        appendData: {
                            contract_id: "{{ $workspace->contract->id }}"
                        },
                        successCallback: function(response) {
                            $('#request-milestone').modal('hide');
                            console.log(response);
                            location.reload();
                        }
                    })
                });

                $('[data-action-request]').click(function(e) {
                    e.preventDefault();
                    const action = $(this).data('action-request');
                    const request_id = $(this).data('request-id');
                    window.rebound({
                        url: "{{ route('client.workspace.milestone.action-request') }}",
                        data: {
                            action: action,
                            request_id: request_id
                        },
                        processData: true,
                        method: 'post',
                        successCallback: function(data) {
                            console.log(data);
                            location.reload();
                        }
                    });

                });

                $('#due_date').flatpickr();
            </script>

            @if (session()->has('success'))
                <script>
                    Notiflix.Report.success('Success', "{{ session('success') }}", 'Ok');
                </script>
            @endif
        </x-slot>
    </x-workspace.layout>
