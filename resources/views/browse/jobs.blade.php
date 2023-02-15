<x-layout>

    {{-- {{ dd($categories) }} --}}
    <x-slot:title>Job List </x-slot>

        <div class="section-full p-t120  p-b90 site-bg-white">


            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-12 rightSidebar">

                        <div class="side-bar">

                            <div class="sidebar-elements search-bx">

                                <form data-filter-form="">
                                    <x-utils.select valueName="slug" :required="false" name="category" :options="$categories"
                                        :selected="[request()->category ?? 'all']" labelClass="h5 mb-4 section-head" />

                                    <x-utils.input :required="false" name="q" label="Keyword" :value="request()->q"
                                        placeholder="Enter Keyword" labelClass="h5 mb-4 section-head" />
                                </form>

                            </div>

                            <div class="widget tw-sidebar-tags-wrap">
                                <h4 class="section-head-small mb-4">Tags</h4>

                                <div class="tagcloud">
                                    @forelse ($skills as $skill)
                                        <a data-tag="{{ $skill->id }}" data-tag-applied="false"
                                            href="javascript:void(0)">{{ $skill->name }}</a>
                                    @empty
                                        <p>No skills found</p>
                                    @endforelse
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
                                <span class="woocommerce-result-count">Sort By</span>
                                <select id="sort-by" class="wt-select-bar-2 selectpicker" data-live-search="false"
                                    data-bv-field="size">
                                    <option value="recent">Most Recent</option>
                                    <opiton value="popular">Most Popular</opiton>
                                    <option value="view">Most Viewed</option>

                                </select>
                                <select id="show-data" class="wt-select-bar-2 selectpicker" data-live-search="false"
                                    data-bv-field="size">
                                    <option value="2">Show 02</option>
                                    <option value="4">Show 04</option>
                                    <option value="10">Show 10</option>
                                    <option value="20">Show 20</option>
                                    <option value="30">Show 30</option>
                                    <option value="40">Show 40</option>
                                    <option value="50">Show 50</option>
                                    <option value="60">Show 60</option>
                                </select>
                            </form>

                        </div>

                        <div data-job-cards class="row match-height">

                            @forelse ($jobs as $job)
                                <x-elements.job-card :showBtn="false" class="col-md-6" :job="$job" />
                            @empty
                                <p class="text-center">No jobs found</p>
                            @endforelse
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


        <div hidden class="d-none" data-skeleton-loader>
            <x-misc.job-skeleton-loader :count="2" class="col-md-6" />
        </div>

        <x-slot name="scripts">
            <script>
                const query = '?type=work';
                let sortBy = 'recent';
                let show = 2;
                $(document).on('click', '.pagination a', function(event) {
                    event.preventDefault();
                    const btn = $(this);
                    if (btn.attr('disabled') == 'disabled') {
                        return;
                    }
                    $(btn).html('<i class="fa fa-spinner fa-spin"></i>');
                    $('.pagination .page-item').removeClass('active').attr('disabled', true);
                    $(btn).parent('.page-item').addClass('active');
                    const page = $(this).attr('href').split('page=')[1];
                    $('.pagination a').attr('disabled', true);
                    fetchJobs(page);

                });

                $('[data-filter-form]').on('change', 'input, select', function() {
                    fetchJobs();
                });

                $('[data-tag]').click(function(e) {
                    e.preventDefault();
                    $(this).attr('data-tag-applied', $(this).attr('data-tag-applied') == 'true' ? 'false' : 'true');
                    fetchJobs();

                });

                $('#sort-by,#show-data').change(function(e) {
                    e.preventDefault();
                    sortBy = $('#sort-by').val();
                    show = $('#show-data').val();
                    fetchJobs();
                });



                function getTags() {
                    const tags = $('[data-tag]').filter(function(index, element) {
                        return $(element).attr('data-tag-applied') == 'true';
                    });
                    const tagNames = [];
                    tags.each(function(index, element) {
                        tagNames.push($(element).attr('data-tag'));
                    });
                    return "&tags=" + tagNames.join(',');
                }

                function getFilterData() {
                    const form = $('[data-filter-form]').closest('form');
                    const data = form.serialize();
                    //check if category is selected
                    if (data.indexOf('category') >= 0) {
                        const urlParams = new URLSearchParams(window.location.search);
                        urlParams.set('category', form.find('select[name="category"]').val());
                        urlParams.delete('sub_category');
                        window.history.replaceState({}, '', decodeURIComponent(`${location.pathname}?${urlParams.toString()}`));


                    }
                    return '&' + data;
                }


                function fetchJobs(page = 1) {
                    ;
                    // return;
                    const filters = query + getFilterData() + getTags() + getUrlQuery();
                    $('[data-job-cards]').html($('[data-skeleton-loader]').html());
                    $('.result__counter p')
                        .addClass('skeleton')
                        .html('<div class="line w175 w-25 h20"></div>');
                    window.rebound({
                        url: '{{ route('search') }}' + filters,
                        data: {
                            page: page,
                            sortBy: sortBy,
                            show: show
                        },
                        method: 'get',
                        block: false,
                        notification: false,
                        processData: true,
                        successCallback: function(response) {
                            // console.log(response);
                            $('[data-job-cards]').html(response.html);
                            $('[data-job-links]').html(response.links);
                        },
                        errorCallback: function(response) {
                            $('.pagination a').attr('disabled', false);
                        },
                    });
                }


                function getUrlQuery() {
                    const urlParams = new URLSearchParams(window.location.search);
                    let query = '';
                    if (urlParams.has('type')) {
                        query += '&type=' + urlParams.get('type');
                    }
                    if (urlParams.has('location')) {
                        query += '&location=' + urlParams.get('location');
                    }
                    if (urlParams.has('category')) {
                        query += '&category=' + urlParams.get('category');
                    }
                    if (urlParams.has('tags')) {
                        query += '&tags=' + urlParams.get('tags');
                    }
                    if (urlParams.has('sub_category')) {
                        query += '&sub_category=' + urlParams.get('sub_category');
                    }
                    return query;

                }
            </script>
        </x-slot>

</x-layout>
