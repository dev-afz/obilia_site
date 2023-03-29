<div class="section-full p-t120 p-b90 site-bg-white twm-job-categories-area3">
    <div class="container">

        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-md-12 position-relative mb-5 pe-5">
                    <h1 class="text-primary">
                        Catogeries
                    </h1>
                    {{-- <a href="#" class="btn btn-primary position-absolute end-0 bottom-0">View all</a> --}}
                </div>
            </div>
        </div>

        <div class="twm-job-categories-section-3 m-b30">

            <div class="job-categories-style3">
                <div class="row match-height">
                    @forelse ($categories as $cat)
                        <!-- COLUMNS 6 -->
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 m-b30">
                            <a href="#" {{-- href="{{ route('categories', $cat->slug) }}" --}}>
                                <div class="job-categories-3-wrap">
                                    <div class="job-categories-3">
                                        <div class="twm-media">
                                            <div class="flaticon-user">

                                                <img class="rounded-circle" src="{{ $cat->image }}" height="100px"
                                                    width="100px" alt="{{ $cat->slug }}">
                                            </div>
                                        </div>
                                        <div class="twm-content">
                                            {{-- <div class="twm-jobs-available">{{ number_format(rand(1111, 9999)) }} Jobs</div> --}}
                                            <a href="#" {{-- href="{{ route('categories', $cat->slug) }}" --}}>{{ $cat->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <h4>
                            No categories found
                        </h4>
                    @endforelse
                </div>
            </div>

        </div>

    </div>

</div>
