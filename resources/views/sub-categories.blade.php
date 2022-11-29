<x-layout>

    <x-slot:title>Category - {{ $category->name }} </x-slot>

        <div class="page-content">
            <div class="section-full  p-t50 p-b90 bg-white">
                <!-- JOBS CATEGORIES SECTION START -->
                <div class="section-full p-t120 p-b90 site-bg-gray twm-job-categories-area2">
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div>Jobs by Categories</div>
                        </div>
                        <h2 class="wt-title">Choose Your Desire Category</h2>
                    </div>
                    <!-- TITLE END-->

                    <div class="container">

                        <div class="twm-job-categories-section-2">

                            <div class="job-categories-style1 m-b30">
                                <div class="row">
                                    @forelse ($subcategories as $sub)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="job-categories-block-2 m-b30">
                                                <div class="twm-media">
                                                    <div class="flaticon-dashboard">

                                                        <img class="rounded-circle" src="{{ $sub->image }}"
                                                            height="100px" width="100px" alt="{{ $sub->slug }}">
                                                    </div>
                                                </div>
                                                <div class="twm-content">
                                                    <div class="twm-jobs-available">{{ rand(1111, 9999) }} Jobs</div>
                                                    <a href="job-detail.html">{{ $sub->name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="job-categories-block-2 no-data">
                                            <h2 class="text-center  text-danger p-4">
                                                No subcategories found
                                            </h2>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- JOBS CATEGORIES SECTION END -->
            </div>
        </div>
</x-layout>
