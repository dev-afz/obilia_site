<x-layout>

    <x-slot:title>Category - {{ $industry->name }} </x-slot>


        <x-slot name="styles">
            <style>
                .card__img {
                    display: block;
                    width: 100%;
                    height: 15rem;
                    object-fit: cover;
                }
            </style>
        </x-slot>


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
                                <div class="row match-height">
                                    @forelse ($categories as $cat)
                                        <div class="col-lg-4 col-md-6 mt-4">


                                            <div class="category-item-card">
                                                <div class="img-container">
                                                    <img src="{{ $cat->image }}" alt="{{ $cat->name }}">
                                                </div>

                                                <div class="p-4">
                                                    <h4 class="mb-5">{{ $cat->name }}</h4>
                                                    @forelse ($cat->sub_categories as $sub)
                                                        <a @auth
@if (auth()->user()->isProvider())
                                                        href="{{ route('search') }}?type=work&sub_category={{ $sub->slug }}"
                                                    @else
                                                        href="{{ route('search') }}?type=talent&sub_category={{ $sub->slug }}"
                                                    @endif @endauth
                                                            class="sub-link mb-2">{{ $sub->name }}
                                                        </a>

                                                    @empty
                                                    @endforelse
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
