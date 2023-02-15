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

                <ul class="timeline">
                    @forelse ($workspace->contract->milestones as $milestone)
                        <li @class(['timeline-item', 'timeline-done' => $loop->first])>
                            <span @class([
                                'timeline-point timeline-point-indicator',
                                'pulse' => $loop->first,
                            ])></span>
                            <div class="timeline-event">
                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                    <h6>{{ $milestone->title }}</h6>
                                    <span class="timeline-event-time">
                                        @if ($milestone->due_date)
                                            <Strong>Date: </Strong> &nbsp;
                                            {{ \Carbon\Carbon::parse($milestone->due_date)->format('M d, Y') }}
                                        @endif
                                    </span>
                                </div>
                                <p>
                                    {{ $milestone->description }}
                                </p>
                                <div class="d-flex flex-row align-items-center justify-content-start">
                                    @if ($milestone->status == 'pending')
                                        <button @class([
                                            'btn btn-sm btn-primary me-4',
                                            'disabled btn-secondary ' => !$loop->first,
                                        ]) class="btn btn-sm btn-primary me-4">Add
                                            Fund In
                                            Escrow</button>
                                        <button @class([
                                            'btn btn-sm btn-outline-primary btn-outline',
                                            'disabled btn-outline-secondary ' => !$loop->first,
                                            'disabled btn-outline-secondary' => !$milestone->escrow_fund_added_time,
                                        ])>
                                            Check & Release Payment</button>
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
            <div id="chat-sec"class="chat-section">
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
    <x-slot name="scripts">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
        <script>
            window.me = '{{ auth()->user()->id }}';
            window.workspace = '{{ $workspace->id }}';
            const message_url = "{{ route('client.workspace.chat.messages') }}";
            const load_url = "{{ route('client.workspace.chat.load-messages') }}";
            const send_url = "{{ route('client.workspace.chat.send-messages') }}";
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
        </script>
    </x-slot>
</x-workspace.layout>
