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
                        <x-elements.job-card :job="$job" />
                    @empty
                    @endforelse
                </div>

            </div>
        </div>

    </div>
</div>
