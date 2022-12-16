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
                    <a href="{{ route('search') }}?type=work" class=" site-button">Browse All Jobs</a>
                </div>
            </div>
        </div>

        <div class="section-content">
            <div class="twm-jobs-grid-wrap">
                <div class="row match-height">
                    <div class="section-content">
                        <div class="owl-carousel job-corousel owl-btn-bottom-center ">
                            @forelse ($jobs as $job)
                                <div class="item row match-height">
                                    <x-elements.job-card class="col-12" :job="$job" />
                                </div>
                            @empty
                            @endforelse

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@pushOnce('component-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endPushOnce


@pushOnce('component-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@endPushOnce

@push('component-scripts')
    <script>
        $('.job-corousel').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            margin: 20,
            autoplay: false,
            // stagePadding: 40,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                991: {
                    items: 3,
                }

            }
        });
    </script>
@endpush
