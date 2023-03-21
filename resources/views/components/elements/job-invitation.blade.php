@forelse ($invitations as $inv)
    <div class="{{ $class ?? 'col-md-6' }}">
        <div class="twm-candidates-grid-style1  mb-5">
            <div class="twm-media">
                <div class="twm-media-pic">
                    <img src="{{ $inv->user->image ?? asset('images/logo/logo.png') }}" alt="#">
                </div>
                <div class="twm-candidates-tag  "><span>Featured</span></div>
            </div>
            <div class="twm-mid-content">
                <a href="#" class="twm-job-title">
                    <h4>{{ $inv->user->name }}</h4>
                </a>
                <p> <strong>Status :</strong> @switch($inv->status)
                        @case('pending')
                            <span class="badge bg-warning">Pending</span>
                        @break

                        @case('accepted')
                            <span class="badge bg-success">Accepted</span>
                        @break

                        @case('rejected')
                            <span class="badge bg-danger">Rejected</span>
                        @break

                        @default
                    @endswitch
                </p>

                <div class="twm-fot-content">
                    <div class="twm-left-info">
                        <p>
                            <strong>Invitation Date :</strong>
                        </p>
                        <p class="text-success">
                            {{ $inv->created_at->format('d M, Y H:i a') }}
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @empty
        <div class="col-md-12">
            <div class="alert alert-warning">
                No Invitation Found
            </div>
        </div>
    @endforelse
