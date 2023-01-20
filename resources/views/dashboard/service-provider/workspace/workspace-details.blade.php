<x-workspace.layout>
    <x-slot name="title">
        {{ $workspace->name }}
    </x-slot>
    <div class="row ">
        <div class="col-md-6 ">
            <div class="card p-5 bg-blue h-100">
                <ul class="timeline">
                    @forelse ($workspace->contract->milestones as $milestone)
                        <li class="timeline-item">
                            <span @class([
                                'timeline-point timeline-point-indicator',
                                'pulse' => $loop->first,
                            ])></span>
                            <div class="timeline-event">
                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                    <h6>{{ $milestone->title }}</h6>
                                    <span class="timeline-event-time">
                                        <Strong>Date: </Strong> &nbsp;
                                        {{ \Carbon\Carbon::parse($milestone->due_date)->format('M d, Y') }}
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
        <div class="col-md-6 text-center">
            <div class="card py-3">
                <h4 class="">Project Status</h4>
                <div class=" justify-content-center d-flex">
                    <div style="--progress:50%" class="progress-bar">
                        <p class="text-white m-0">50%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="floating-chat ">
        <i class="fa fa-comments" aria-hidden="true"></i>
        <div class="chat">
            <div class="header">
                <span class="title">
                    {{ $workspace->provider->name }}
                </span>
                <button>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>

            </div>
            <ul class="messages">
                <li class="other">asdasdasasdasdasasdasdasasdasdasasdasdasasdasdasasdasdas</li>
                <li class="self">Whaaaaaaaaaaaaaaaat</li>
                <li class="other">Nothing</li>
                <li class="self">Ok</li>
                <li class="other">Wasup</li>
                <li class="self">Nothing</li>
                <li class="other">Ok</li>
                <li class="self">Ok</li>

            </ul>
            <div class="footer">
                <div class="text-box" contenteditable="true" disabled="true"></div>
                <button id="sendMessage">send</button>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
        <script src="{{ asset(mix('js/workspace/chat.js')) }}"></script>
        <script>
            setTimeout(() => {
                $('.floating-chat').click();
            }, 100);
        </script>
    </x-slot>
</x-workspace.layout>
