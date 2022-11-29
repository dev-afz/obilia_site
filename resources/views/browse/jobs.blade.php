<x-layout>

    <x-slot:title>Job List </x-slot>

        <x-slot name="styles">
            <style>
                .page-link {
                    display: flex !important;
                    justify-content: center;
                    align-items: center;
                }
            </style>
        </x-slot>

        <div class="section-full p-t120  p-b90 site-bg-white">


            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-12 rightSidebar">

                        <div class="side-bar">

                            <div class="sidebar-elements search-bx">

                                <form>

                                    <div class="form-group mb-4">
                                        <h4 class="section-head-small mb-4">Category</h4>
                                        <select class="wt-select-bar-large selectpicker" data-live-search="true"
                                            data-bv-field="size">
                                            <option selected>All Category</option>
                                            <option>Web Designer</option>
                                            <option>Developer</option>
                                            <option>Acountant</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-4">
                                        <h4 class="section-head-small mb-4">Keyword</h4>
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                placeholder="Job Title or Keyword">
                                            <button class="btn" type="button"><i
                                                    class="feather-search"></i></button>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <h4 class="section-head-small mb-4">Location</h4>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search location">
                                            <button class="btn" type="button"><i
                                                    class="feather-map-pin"></i></button>
                                        </div>
                                    </div>

                                    <div class="twm-sidebar-ele-filter">
                                        <h4 class="section-head-small mb-4">Job Type</h4>
                                        <ul>
                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label"
                                                        for="exampleCheck1">Freelance</label>
                                                </div>
                                                <span class="twm-job-type-count">09</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label class="form-check-label" for="exampleCheck2">Full
                                                        Time</label>
                                                </div>
                                                <span class="twm-job-type-count">07</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                    <label class="form-check-label"
                                                        for="exampleCheck3">Internship</label>
                                                </div>
                                                <span class="twm-job-type-count">15</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                    <label class="form-check-label" for="exampleCheck4">Part
                                                        Time</label>
                                                </div>
                                                <span class="twm-job-type-count">20</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                    <label class="form-check-label"
                                                        for="exampleCheck5">Temporary</label>
                                                </div>
                                                <span class="twm-job-type-count">22</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                                    <label class="form-check-label"
                                                        for="exampleCheck6">Volunteer</label>
                                                </div>
                                                <span class="twm-job-type-count">25</span>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="twm-sidebar-ele-filter">
                                        <h4 class="section-head-small mb-4">Date Posts</h4>
                                        <ul>
                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio1">
                                                    <label class="form-check-label" for="exampleradio1">Last
                                                        hour</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio2">
                                                    <label class="form-check-label" for="exampleradio2">Last 24
                                                        hours</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio3">
                                                    <label class="form-check-label" for="exampleradio3">Last 7
                                                        days</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio4">
                                                    <label class="form-check-label" for="exampleradio4">Last 14
                                                        days</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input"
                                                        id="exampleradio5">
                                                    <label class="form-check-label" for="exampleradio5">Last 30
                                                        days</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input"
                                                        id="exampleradio6">
                                                    <label class="form-check-label" for="exampleradio6">All</label>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="twm-sidebar-ele-filter">
                                        <h4 class="section-head-small mb-4">Type of employment</h4>
                                        <ul>
                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="Freelance1">
                                                    <label class="form-check-label" for="Freelance1">Freelance</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="FullTime1">
                                                    <label class="form-check-label" for="FullTime1">Full Time</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="Intership1">
                                                    <label class="form-check-label" for="Intership1">Intership</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="Part-Time1">
                                                    <label class="form-check-label" for="Part-Time1">Part Time</label>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                </form>

                            </div>

                            <div class="widget tw-sidebar-tags-wrap">
                                <h4 class="section-head-small mb-4">Tags</h4>

                                <div class="tagcloud">
                                    <a href="job-list.html">General</a>
                                    <a href="job-list.html">Jobs </a>
                                    <a href="job-list.html">Payment</a>
                                    <a href="job-list.html">Application </a>
                                    <a href="job-list.html">Work</a>
                                    <a href="job-list.html">Recruiting</a>
                                    <a href="job-list.html">Employer</a>
                                    <a href="job-list.html">Income</a>
                                    <a href="job-list.html">Tips</a>
                                </div>
                            </div>


                        </div>

                        <div class="twm-advertisment" style="background-image:url(images/add-bg.jpg);">
                            <div class="overlay"></div>
                            <h4 class="twm-title">Recruiting?</h4>
                            <p>Get Best Matched Jobs On your <br>
                                Email. Add Resume NOW!</p>
                            <a href="about-1.html" class="site-button white">Read More</a>
                        </div>

                    </div>

                    <div class="col-lg-8 col-md-12">
                        <!--Filter Short By-->
                        <div class="product-filter-wrap d-flex justify-content-between align-items-center m-b30">
                            <span class="woocommerce-result-count-left">Available Jobs</span>

                            <form class="woocommerce-ordering twm-filter-select" method="get">
                                <span class="woocommerce-result-count">Short By</span>
                                <select class="wt-select-bar-2 selectpicker" data-live-search="true"
                                    data-bv-field="size">
                                    <option>Most Recent</option>
                                    <option>Freelance</option>
                                    <option>Full Time</option>
                                    <option>Internship</option>
                                    <option>Part Time</option>
                                    <option>Temporary</option>
                                </select>
                                <select class="wt-select-bar-2 selectpicker" data-live-search="true"
                                    data-bv-field="size">
                                    <option>Show 10</option>
                                    <option>Show 20</option>
                                    <option>Show 30</option>
                                    <option>Show 40</option>
                                    <option>Show 50</option>
                                    <option>Show 60</option>
                                </select>
                            </form>

                        </div>

                        <div data-job-cards class="row match-height">

                            @foreach ($jobs as $job)
                                <x-elements.job-card :showBtn="false" class="col-md-6" :job="$job" />
                            @endforeach


                        </div>

                        <div class="pagination-outer">
                            <div data-job-links class="pagination-style1">
                                {!! $jobs->links() !!}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <x-slot name="scripts">
            <script>
                let filter = window.location.search;



                $(document).on('click', '.pagination a', function(event) {
                    event.preventDefault();
                    const btn = $(this);
                    $(btn).html('<i class="fa fa-spinner fa-spin"></i>');
                    $('.pagination .page-item').removeClass('active');
                    $(btn).parent('.page-item').addClass('active');
                    var page = $(this).attr('href').split('page=')[1];
                    window.rebound({
                        url: '{{ route('search') }}' + filter,
                        data: {
                            page: page,

                        },
                        method: 'get',
                        block: false,
                        notification: false,
                        processData: true,
                        successCallback: function(response) {
                            console.log(response);
                            $('[data-job-cards]').html(response.html);
                            $('[data-job-links]').html(response.links);
                        }
                    });
                });
            </script>
        </x-slot>

</x-layout>
