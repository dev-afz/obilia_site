@props(['contract'])
@php
    $contractData = json_decode($contract->contract, true);
@endphp

<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between">
            <div>
                <strong>Contract</strong> : <span class="text-success fs-6"> {{ $contractData['project_title'] }}</span>
                <br>
            </div>
            <div>

                <strong>Date</strong> : <span class="text-success fs-6"> {{ $contractData['contract_date'] }}</span> <br>
            </div>
            <div>

                <strong>Amount</strong> : <span class="text-success fs-6"> {{ $contractData['project_cost'] }}</span>
                <br>
            </div>
        </div>
    </div>
    <div class="divider">
        <div class="divider-text">
            <h4>
                Contract Description
            </h4>
        </div>
    </div>
    <div class="col-12">
        {{ $contractData['project_description'] }}
    </div>


    <div class="divider">
        <div class="divider-text">
            <h4>
                Contracct Timeline
            </h4>
        </div>
    </div>
    @foreach ($contractData['milestones'] as $milestone)
        <div class="col-12 mt-2">
            <div class="card p-3">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6 class="text-center text-primary">{{ $milestone['title'] }}</h6>
                    <span class="timeline-event-time">
                        Due : <span class="badge bg-danger">{{ $milestone['due_date'] ?? 'NA' }}</span>
                    </span>
                </div>
                <p>
                    {{ $milestone['description'] }}
                </p>
            </div>
        </div>
    @endforeach

    @if ($contract->status == 'pending')

        @if ($contract->send_by == auth()->user()->id)
            @if ($contract->status == 'pending')
                <div class="col-12 text-center mt-4">
                    <span class="text-danger">
                        Waiting for response
                    </span>
                </div>
            @endif
        @else
            <div class="col-12 d-flex mt-4 justify-content-center gap-5">
                <button data-contract-action="{{ $contract->id }}" data-contract-action-type="accept"
                    class="contract-btn btn-accept">
                    <i class="feather-check"></i>
                </button>
                <button data-contract-action="{{ $contract->id }}" data-contract-action-type="reject"
                    class="contract-btn btn-reject">
                    <i class="feather-x"></i>
                </button>
            </div>
        @endif
    @else
        @if ($contract->status == 'accepted')
            <div class="col-12 text-center mt-4">
                <span class="text-success">
                    Contract Accepted
                </span>
            </div>
        @else
            <div class="col-12 text-center mt-4">
                <span class="text-danger">
                    Contract Rejected
                </span>
            </div>
        @endif
    @endif


</div>
