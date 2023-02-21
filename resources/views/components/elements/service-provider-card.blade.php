@forelse ($users as $user)
    <div class="{{ $class ?? 'col-md-6' }}">
        <div class="twm-candidates-grid-style1  mb-5">
            <div class="twm-media">
                <div class="twm-media-pic">
                    <img src="{{ $user->image ?? asset('images/logo/logo.png') }}" alt="#">
                </div>
                <div class="twm-candidates-tag  "><span>Featured</span></div>
            </div>
            <div class="twm-mid-content">
                <a href="candidate-detail.html" class="twm-job-title">
                    <h4>{{ $user->name }}</h4>
                </a>
                <p>Charted Accountant</p>
                <a href="{{ route('provider', $user->uuid) }}" class="twm-view-prifile site-text-primary">View
                    Profile</a>

                <div class="twm-fot-content">
                    <div class="twm-left-info">
                        @if ($showInvite)
                            <p class="twm-candidate-address">
                                <button data-invite-candidate="{{ $user->id }}"
                                    class="btn btn-primary btn-sm bg-primary">Invite</button>
                            </p>
                        @endif
                        <div class="twm-jobs-vacancies">$20<span>/ Day</span></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@empty
    <div class="col-md-12">
        <div class="alert alert-warning">
            No Suggestion Found
        </div>
    </div>
@endforelse
