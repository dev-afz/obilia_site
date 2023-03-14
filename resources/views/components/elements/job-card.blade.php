<div class="{{ $class ?? 'col-lg-4 col-md-6' }}">
    <div class="twm-jobs-grid-style1 d-flex flex-column justify-content-between   m-b30">
        <div @if (!$showBtn) style="right: 10px;" @endif class="twm-jobs-category green">
            <span class="bg-primary small">{{ $job->sub_category->name }}</span>
        </div>
        @if ($showBtn)
            <div class="like-btn-holder">
                @auth()
                    <button class="like-btn" data-liked-job="{{ $job->slug }}"
                        @if ($job->likes_count) data-liked="true" @else data-liked="false" @endif>
                        <i class="fas fa-heart"></i>
                    </button>
                @endauth

                @guest()
                    <button class="like-btn" href="#login_popup" data-bs-toggle="modal">
                        <i class="fas fa-heart"></i>
                    </button>
                @endguest

            </div>
        @endif

        <div class="twm-mid-content pt-0">
            <span class="twm-job-post-duration  m-0">{{ $job->created_at->diffForHumans() }}</span>
            <a href="{{ route('jobs.show', $job->slug) }}" class="twm-job-title">
                <h4 class="">{{ $job->title }}</h4>
            </a>
            <p class="twm-job-address ">
                {{ //get only first 20 words
                    Str::limit($job->description, 100) }}
            </p>

        </div>
        <div class="twm-right-content">

            <div class="twm-jobs-amount ">
                ₹{{ $job->rate_from }} -₹{{ $job->rate_to }}
            </div>
            <a href="{{ route('jobs.show', $job->slug) }}" class="twm-jobs-browse  ">View
                Details</a>
        </div>
        {{ $slot ?? '' }}
    </div>
</div>


@if ($showBtn)
    @auth()
        @pushOnce('component-scripts')
            <script>
                $(document).on('click', '[data-liked]', function(e) {
                    e.preventDefault();
                    const btn = $(this);
                    var liked = $(this).attr('data-liked');
                    var job = $(this).data('liked-job');
                    $(btn).attr('data-liked', (liked == 'true') ? 'false' : 'true');

                    window.rebound({
                        data: {
                            liked: !liked,
                            job: job
                        },
                        processData: true,
                        block: false,
                        method: 'PUT',
                        notification: false,
                        url: "{{ route('jobs.toggle-like') }}",
                        subccessCallback: function(response) {
                            console.log(response);
                        },
                        errorCallback: function(response) {
                            $(btn).attr('data-liked', liked);
                            console.log(response);
                        }

                    });
                });
            </script>
        @endpushOnce
    @endauth

@endif
