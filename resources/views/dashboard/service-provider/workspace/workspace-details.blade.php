<x-workspace.layout>
    <x-slot name="title">
        {{ $workspace->name }}
    </x-slot>

    <x-slot name="styles">
        <link rel="stylesheet" href="https://rawcdn.githack.com/nextapps-de/winbox/0.2.6/dist/css/winbox.min.css">
        <style>
            .chat-section {
                padding: 0;
            }

            .chat-mobile-btn {
                display: none;
                position: fixed;
                bottom: 5rem;
                right: 1rem;
            }

            .chat-mobile-btn>button {
                height: 3.5rem;
                width: 3.5rem;
                border-radius: 50%;
                background: #05374d;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .chat-mobile-btn>button>i {
                color: #fff;
                font-size: 1.5rem;
            }

            @media (max-width: 578px) {
                .chat-mobile-btn {
                    display: block;
                }
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
                <div style="--progress:50%" class="progress-bar">
                    <p class="text-white m-0">50%</p>
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

                        <li @class([
                            'timeline-item',
                            'timeline-done' => $milestone->status == 'completed',
                        ])>
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
                                            {{ \Carbon\Carbon::parse($milestone->escrow_fund_added_time)->diffForHumans() }}
                                        </small>

                                        @if (!$milestone->escrow_fund_released_time)
                                            <button data-add-work="{{ $milestone->id }}" class="btn btn-sm btn-primary">
                                                @if ($milestone->works->count() > 0)
                                                    Update Work
                                                @else
                                                    Add Work
                                                @endif
                                            </button>
                                        @endif
                                    @else
                                        <span class="badge bg-danger me-1">Fund Not Added</span>
                                    @endif

                                    @if ($milestone->escrow_fund_released_time)
                                        <span class="badge bg-success me-1">
                                            Fund Released :
                                            {{ \Carbon\Carbon::parse($milestone->escrow_fund_released_time)->diffForHumans() }}
                                        </span>
                                    @else
                                    @endif


                                </div>
                            </div>
                        </li>
                    @empty
                    @endforelse
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
    </div>



    <div class="chat-mobile-btn">
        <button id="open-chat">
            <i class="fas fa-comment-dots"></i>
        </button>
    </div>



    <x-elements.modal id="work-modal" class="modal-lg" :footer="false" title="Add Work">
        <form id="add-work">
            <div class="divider">
                <div class="divider-text">
                    <h4>
                        Previous Work
                    </h4>
                </div>
            </div>
            <div id="work-body">

            </div>
            <div class="divider">
                <div class="divider-text">
                    <h4>
                        Add/Update Work
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <x-utils.input type="file" :required="false" name="file" id="file" />
                    <input type="hidden" name="milestone_id" id="milestone_id">
                </div>

                <div class="col-12">
                    <x-utils.input type="text" :required="false" name="remark" id="remark" />
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </x-elements.modal>



    <x-slot name="scripts">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
        <script>
            window.me = '{{ auth()->user()->id }}';
            window.workspace = '{{ $workspace->id }}';
            const message_url = "{{ route('service-provider.workspace.chat.messages') }}";
            const load_url = "{{ route('service-provider.workspace.chat.load-messages') }}";
            const send_url = "{{ route('service-provider.workspace.chat.send-messages') }}";
        </script>
        <script src="{{ asset(mix('js/workspace/chat.js')) }}"></script>
        <script src="https://rawcdn.githack.com/nextapps-de/winbox/0.2.6/dist/js/winbox.min.js"></script>
        <script>
            const workspace = @json($workspace);
            new PerfectScrollbar('#chat-holder', {
                wheelSpeed: 2,
                wheelPropagation: true,
                minScrollbarLength: 20
            });


            //if screen size is less than 578px set width to screen width otherwise 500px
            let width = window.matchMedia("(max-width: 578px)").matches ? '100%' : '500px';

            const wBox = new WinBox("Chat", {
                mount: document.getElementById("chat-sec"),
                height: "80%",
                width: width,
                x: 'right',
                y: 'bottom',
                min: (width == '100%') ? true : false,
                background: '#09596f',
                onclose: function(force) {
                    if (force || confirm("Close window?")) {
                        $('.chat-mobile-btn').remove();
                        return false;
                    }
                    return true;
                },
                onminimize: function() {
                    //if screen size is less than 578px
                    if (window.matchMedia("(max-width: 578px)").matches) {
                        this.addClass('d-none');
                    }
                },
                onmaximize: function() {
                    this.removeClass('d-none');
                }


            });

            $('#open-chat').click(function(e) {
                e.preventDefault();
                wBox.maximize();

            });
        </script>

        <script>
            $('[data-add-work]').click(function(e) {
                e.preventDefault();
                const milestone_id = $(this).data('add-work');
                window.rebound({
                    url: "{{ route('service-provider.workspace.get-works') }}",
                    data: {
                        milestone_id: milestone_id
                    },
                    processData: true,
                    method: 'get',
                    successCallback: function(data) {
                        console.log(data);
                        $('#work-body').html(data.html);
                        $('#milestone_id').val(milestone_id);
                        $('#work-modal').modal('show');
                    }
                });

            });

            $('#add-work').submit(function(e) {
                e.preventDefault();
                window.rebound({
                    url: "{{ route('service-provider.workspace.add-work') }}",
                    form: this,
                    successCallback: function(data) {
                        console.log(data);
                        $('#work-modal').modal('hide');
                        location.reload();
                    }
                })

            });
        </script>
    </x-slot>
</x-workspace.layout>
