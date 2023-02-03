<x-dashboard.layout>

    <x-slot name="styles">
        <style>
            .avatar img {
                width: 8rem;
                height: 8rem;
                border-radius: 50%;
            }

            .avatar-sm img {
                width: 2rem;
                height: 2rem;
                border-radius: 50%;
            }

            .checked {
                color: orange;
            }

            hr {
                width: 100%;

            }

            #add-service-offcanvas {
                width: 100%;
                max-width: 40rem;
            }
        </style>
    </x-slot>

    <x-slot name="title"> Profile </x-slot>
    <div id="content">

        <div class="content-admin-main">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card p-3 d-flex align-items-center twm-s-info ">
                        <div class="avatar">
                            <img src="{{ $user->images ?? asset('images/user-avtar/pic1.jpg') }}" alt="">
                        </div>

                        <div class="name text-center mt-4">
                            <h4 class="mb-0">{{ $user->name }}</h4>
                            <span>{{ $user->email }}</span>
                        </div>
                        <div class="rating-container">
                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <small>3.1 (89 reviews)</small>
                        </div>
                        <hr>
                        <x-utils.accordion class="w-100 " open="user_details" :items="['user_details', 'kyc_details', 'business_details']">
                            <x-slot name="user_details">
                                <div class="px-2 w-100 position-relative">
                                    <a style="right: 1rem;z-index:10;"
                                        class="position-absolute top-0 z-10 btn btn-primary btn-sm"
                                        href="{{ route('service-provider.edit-profile') }}">Edit</a>
                                    <ul>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="twm-title">State</span>
                                                <div class="twm-s-info-discription">Maharashtra</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-phone"></i>
                                                <span class="twm-title">Mobile</span>
                                                <div class="twm-s-info-discription">{{ $user->phone }}</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-user-circle"></i>
                                                <span class="twm-title">Gender</span>
                                                <div class="twm-s-info-discription">{{ ucfirst($user->gender ?? 'NA') }}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-calendar"></i>
                                                <span class="twm-title">Member Since</span>
                                                <div class="twm-s-info-discription">
                                                    {{ $user->created_at->format('d M, Y') }}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-paper-plane"></i>
                                                <span class="twm-title">Last Delivery</span>
                                                <div class="twm-s-info-discription">12 Day</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-exclamation-circle"></i>
                                                <span class="twm-title">Staus</span>
                                                <div class="twm-s-info-discription">
                                                    <div class="twm-s-info-discription">{{ ucfirst($user->status) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-paper-plane"></i>
                                                <span class="twm-title">Skills</span>
                                                <div class="twm-s-info-discription tw-sidebar-tags-wrap">
                                                    <div class="tagcloud">
                                                        @forelse ($user->skills as $s)
                                                            <a href="#">
                                                                {{ $s->skill->name }}
                                                            </a>
                                                        @empty
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </x-slot>

                            <x-slot name="kyc_details">
                                <div class="px-2 w-100 position-relative">
                                    <div class="row">
                                        @forelse ($user->kycs as $kyc)
                                            <div class="col">
                                                <div class="divider">
                                                    <div class="divider-text">{{ ucfirst($kyc->name) }}</div>
                                                </div>
                                                <div data-view-onclick>
                                                    <img class="rounded cursor-pointer" src="{{ $kyc->file }}"
                                                        alt="{{ $kyc->name }}">
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col">
                                                <span class="text-danger">No Kyc Found</span>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </x-slot>

                            <x-slot name="business_details">
                                <div class="px-2 w-100 position-relative">

                                    @if ($user->business)
                                        <a style="right: 1rem;z-index:10;"
                                            class="position-absolute top-0 z-10 btn btn-primary btn-sm"
                                            href="{{ route('service-provider.edit-business') }}">Edit</a>
                                        <ul>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Business Name</span>
                                                    <div class="twm-s-info-discription">{{ $user->business->name }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Business CIN No.</span>
                                                    <div class="twm-s-info-discription">{{ $user->business->cin }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Business Address</span>
                                                    <div class="twm-s-info-discription">{{ $user->business->address }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Business GST</span>
                                                    <div class="twm-s-info-discription">
                                                        {{ $user->business->gstin ?? 'NA' }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">
                                                        Incorporation Certificate
                                                    </span>
                                                    <div class="twm-s-info-discription">
                                                        <a href="{{ $user->business->incorporation_certificate }}"
                                                            target="_blank">View</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    @else
                                        <div class="text-center">
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('service-provider.add-business') }}">Add Business
                                                Details
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </div>
                                    @endif






                                </div>
                            </x-slot>
                        </x-utils.accordion>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <h3>
                                {{ explode(' ', $user->name)[0] }}'s Services
                            </h3>
                            <div>
                                <button class="btn btn-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#add-service-offcanvas" aria-controls="add-service-offcanvas">
                                    Add New Service
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="row match-height" id="service-list"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <x-utils.offcanvas id="add-service-offcanvas" title="Add Service" position="end">

        <form id="add-service-form">
            <div class="row">
                <div class="col-md-12">
                    <x-utils.select name="sub_category" :options="$subcategories" />
                </div>
                <div class="col-md-12">
                    <x-utils.input name="title" />
                </div>
                <div class="col-md-12">
                    <x-utils.input name="price" type="number" :attrs="[
                        'min' => 1,
                        'step' => 0.01,
                    ]" />
                </div>
                <div class="col-md-12">
                    <x-utils.input-file name="images" :multiple="true" />
                </div>
                <div class="col-md-12">
                    <x-utils.input name="description" type="textarea" />
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        Add <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </form>

    </x-utils.offcanvas>


    <x-slot name="scripts">

        <script>
            $(document).ready(function() {
                $('#sidebarCollapse').click();
                loadServices();
            });

            $('#add-service-form').submit(function(e) {
                e.preventDefault();
                window.rebound({
                    form: $(this),
                    url: "{{ route('service-provider.service.store') }}",
                    reset: false,
                    successCallback: function(response) {
                        $('#add-service-offcanvas').offcanvas('hide');
                        loadServices();
                    }

                })

            });


            function loadServices() {
                window.rebound({
                    url: "{{ route('service-provider.service.index') }}",
                    data: "",
                    method: 'GET',
                    processData: true,
                    notification: false,
                    block: '#service-list',
                    successCallback: function(response) {
                        $('#service-list').html(response.html);
                    }
                })
            }
        </script>

    </x-slot>

</x-dashboard.layout>
