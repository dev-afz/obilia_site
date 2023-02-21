<x-layout>

    <x-slot name="title">Service Details</x-slot>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset(mix('css/override.css')) }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.0.5/swiper-bundle.css">
        <style>
            .avatar img {
                width: 8rem;
                height: 8rem;
                border-radius: 50%;
            }

            .avatar-md img {
                width: 3.5rem;
                height: 3.5rem;
                border-radius: 50%;
            }

            .avatar-sm img {
                width: 2.5rem !important;
                height: 2.5rem !important;
                border-radius: 50%;
            }


            .checked {
                color: orange;
            }

            .text-gray {
                color: #404145 !important;
            }

            .swiper-button-next,
            .swiper-button-prev {
                height: 1rem;
                width: 1rem;
                background: rgba(255, 255, 255, 0.78) !important;
                box-shadow: 0 4px 30px rgb(0 0 0 / 10%) !important;
                backdrop-filter: blur(10px);
                padding: 1.2rem;
                border-radius: 50%;
                color: #09596f;
            }

            .swiper-button-next:after,
            .swiper-button-prev:after {
                font-size: 1rem;
            }

            .message-btn {
                position: fixed;
                bottom: 2rem;
                left: 2rem;
                z-index: 999;
                display: flex;
                background: rgba(255, 255, 255, 0.78) !important;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                outline: 1px solid rgb(224 238 255);
                backdrop-filter: blur(10px);
                padding: 0.5rem 1.5rem 0.5rem 0.5rem;
                align-items: center;
                gap: 0.5rem;
                border-radius: 5rem;
                cursor: pointer;
            }

            @media (max-width: 768px) {
                .message-btn {
                    position: relative;
                    bottom: 0;
                    left: 0;
                    border-radius: 0;
                    margin: 1rem 0;
                }
            }
        </style>
    </x-slot>
    <div class="page-content">
        <div class="section-full  pt-5 p-b90 bg-white">


            <div class="container">
                <div class="row">
                    <x-elements.service-details :service="$service" />

                </div>
                @auth()
                    @if (auth()->user()->id !== $service->user->id)
                        <div data-start-chat="{{ $service->id }}" class="message-btn">
                            <div class="avatar-md">
                                <img src="{{ $service->user->images ?? 'https://ui-avatars.com/api/?name=' . $service->user->name }}"
                                    alt="">
                            </div>
                            <div>
                                <strong class="m-0 d-block">
                                    Message {{ $service->user->name }}
                                </strong>

                                <small class="m-0">
                                    Avg. response time: 3 hr.
                                </small>
                            </div>


                        </div>
                    @endif
                @endauth

                @if ($recommended->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="divider">
                                <div class="divider-text">
                                    <h4 class="fs-3">
                                        Recommended Services
                                    </h4>
                                </div>
                            </div>

                            <div class="swiper service-swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($recommended as $service)
                                        <div class="swiper-slide">
                                            <x-elements.user-service :service="$service" class="" />
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next d-md-none"></div>
                                <div class="swiper-button-prev d-md-none"></div>

                            </div>


                        </div>
                    </div>
                @endif


            </div>


        </div>
    </div>


    <x-slot name="scripts">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.0.5/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".service-swiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                breakpoints: {

                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },

                    480: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        </script>
    </x-slot>

</x-layout>
