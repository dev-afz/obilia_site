<div class="col-md-8">
    <h4 class="fs-3 text-gray">
        {{ $service->title }}
    </h4>
    <div class="user-data">

        <div class="service my-2 d-flex align-items-center py-2">
            <div class="avatar-sm me-2">
                <img src="{{ $service->user->images ?? asset('images/user-avtar/pic1.jpg') }}" alt="">
            </div>
            <a href="{{ route('provider', $service->user->uuid) }}">
                <h5 class="mb-0 ms-2">{{ $service->user->name }} &nbsp;</h5>
            </a>
            <div class="rating d-flex align-items-center ms-2 ">
                <span class="vertical-line me-2"></span>
                <span class="fa fa-star checked"></span>
                <p class="mb-0 ms-2">
                    4.9 (44)
                </p>
            </div>
            <div class="starting-price d-flex align-items-center  ms-2 ">
                <span class="vertical-line me-2"></span>
                <strong class="mb-0 text-success">
                    Starting at ₹{{ $service->price }}

                </strong>
            </div>
        </div>


    </div>
    <div class="service-banner">
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                @foreach ($service->images as $img)
                    <div class="swiper-slide">
                        <img loading="lazy" src="{{ $img->image }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($service->images as $img)
                    <div class="swiper-slide">
                        <img loading="lazy" src="{{ $img->image }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="service-details mt-4">
        <div class="divider">
            <div class="divider-text">
                <h3 class="mb-0">
                    About this service
                </h3>
            </div>
        </div>


        {!! $service->description !!}
    </div>
    <div class="extra-data">

    </div>
</div>
<div class="col-md-4">
    <div class="card p-3 d-flex align-items-center twm-s-info ">
        <div class="avatar">
            <img src="{{ $service->user->images ?? asset('images/user-avtar/pic1.jpg') }}" alt="">
        </div>


        <div class="name text-center mt-4">
            <h4 class="mb-0">{{ $service->user->name }}</h4>
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
        <x-utils.accordion class="w-100 " :items="['user_details']" open="user_details">
            <x-slot name="user_details">
                <div class="px-2 w-100 position-relative">
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
                                <i class="fas fa-user-circle"></i>
                                <span class="twm-title">Gender</span>
                                <div class="twm-s-info-discription">
                                    {{ ucfirst($service->user->gender ?? 'NA') }}
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="twm-s-info-inner">
                                <i class="fas fa-calendar"></i>
                                <span class="twm-title">Member Since</span>
                                <div class="twm-s-info-discription">
                                    {{ $service->user->created_at->format('d M, Y') }}
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
                    </ul>
                </div>
            </x-slot>




        </x-utils.accordion>
    </div>
</div>


@pushonce('component-styles')
    <style>
        .vertical-line {
            background: #09596fb3;
            height: 1rem;
            width: 2px;
        }

        .service-details strong {
            font-size: 1.5rem
        }

        .service-details ul {
            margin-left: 1rem;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }



        .swiper {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 25rem !important;
            width: 100%;
        }

        .mySwiper {
            height: 10rem !important;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpushonce




@pushonce('component-lower-scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endpushonce
