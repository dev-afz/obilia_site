@props(['works', 'controls' => false])

<div class="row">

    @forelse($works as $key => $work)

        <div class="col-md-8 mt-2">
            @if ($work->file)
                <a class="btn btn-primary me-3" href="{{ $work->file }}" download="">
                    Download
                </a>
            @endif

            @if ($work->remark)
                <span class="text-primary me-3">
                    {{ $work->remark }}
                </span>
            @endif

        </div>

        <div class="col-md-4 mt-2">
            @if ($work->status === 'pending')
                @if ($controls)
                    <button data-work="{{ $work->id }}" data-work-action="approved" class="btn btn-success me-3">
                        Approve
                    </button>

                    <button data-work="{{ $work->id }}" data-work-action="rejected" class="btn btn-danger">
                        Reject
                    </button>
                @else
                    <span class="text-primary me-3">
                        Pending
                    </span>
                @endif
            @else
                @if ($work->status === 'approved')
                    <span class="text-success me-3">
                        Approved
                    </span>
                @elseif($work->status === 'rejected')
                    <span class="text-danger me-3">
                        Rejected
                    </span>
                @else
                    <span class="text-primary me-3">
                        Pending
                    </span>
                @endif
            @endif
        </div>
        <div class="col-12">
            <hr>
        </div>
    @empty
        <div class="col-md-12">
            <span class="text-danger">
                No work found
            </span>
        </div>
    @endforelse

</div>
