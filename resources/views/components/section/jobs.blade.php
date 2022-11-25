<div class="section-full p-t120 p-b90 site-bg-gray twm-bg-ring-wrap2">
    <div class="twm-bg-ring-right"></div>
    <div class="twm-bg-ring-left"></div>
    <div class="container">

        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div>All Jobs Post</div>
                        </div>
                        <h2 class="wt-title">Find Your Career You Deserve it</h2>
                    </div>
                    <!-- TITLE END-->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                    <a href="job-list.html" class=" site-button">Browse All Jobs</a>
                </div>
            </div>
        </div>

        <div class="section-content">
            <div class="twm-jobs-grid-wrap">
                <div class="row match-height">
                    @forelse ($jobs as $job)
                        <div class="col-lg-4 col-md-6">
                            <div class="twm-jobs-grid-style1 d-flex flex-column justify-content-between   m-b30">
                                <div class="twm-media">
                                    <img height="90px" width="90px" src="{{ $job->banner }}" alt="#">
                                </div>

                                <div class="twm-jobs-category green"><span
                                        class="bg-yellow text-primary ">{{ $job->sub_category->name }}</span></div>
                                <div class="twm-mid-content">
                                    <span
                                        class="twm-job-post-duration text-yellow m-0">{{ $job->created_at->diffForHumans() }}</span>
                                    <a href="j#" class="twm-job-title">
                                        <h4 class="text-white">{{ $job->title }}r</h4>
                                    </a>
                                    <p class="twm-job-address text-white">
                                        {{ //get only first 20 words
                                            Str::limit($job->description, 100) }}
                                    </p>

                                </div>
                                <div class="twm-right-content">

                                    <div class="twm-jobs-amount text-yellow">
                                        ₹{{ $job->rate_from }} -₹{{ $job->rate_to }}
                                    </div>
                                    <a href="#" class="twm-jobs-browse  text-white">View Details</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>

            </div>
        </div>

    </div>
</div>
