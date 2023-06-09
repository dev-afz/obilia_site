<div class="{{ $class }}">
    <div class="card twm-s-info  p-0 service-container ">
        <img class="service-image" src="{{ $service->images->first()->image }}" alt="">
        <div class="d-flex flex-column justify-content-between px-3 h-100 ">
            <div class="service-data">
                <div class="service mt-2 d-flex align-items-center py-2">
                    <div class="avatar-sm">
                        <img src="{{ asset('images/user-avtar/pic1.jpg') }}" alt="">
                    </div>
                    <a href="{{ route('provider', $service->user->uuid) }}">
                        <h5 class="mb-0 ms-2">{{ $service->user->name }}</h5>
                    </a>
                </div>
                <div class=" text-start">
                    <a href="{{ route('service-details', [$service->user->uuid, $service->slug]) }}">
                        <strong>
                            {{ $service->title }}
                        </strong>
                    </a>
                </div>
                <div class="rating d-flex align-items-center mt-2">
                    <span class="fa fa-star checked"></span>
                    <p class="mb-0 ms-2">
                        4.9 (44)
                    </p>
                </div>
            </div>
            <div class="price-data">
                <hr class="mx-1">
                <div class="d-flex justify-content-between  mb-2">
                    <div class="d-flex align-items-center">
                        @if ($showLikeButton)
                            <button class="like-btn bg-primary text-white"
                                @auth()
                                data-start-chat="{{ $service->id }}"
                           @disabled(auth()->user()->id == $service->user_id)
                           @endauth
                                @guest data-bs-target="#login_popup"
                                data-bs-toggle="modal" @endguest>
                                <i class="fa fa-comment"></i>
                            </button>
                        @endif
                    </div>
                    <div>
                        <small>STARTING AT</small>
                        <h4>₹{{ $service->price }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@auth()
    @pushonce('component-scripts')
        <script>
            $(document).on('click', '[data-start-chat]', function(e) {
                e.preventDefault();
                var service = $(this).data('start-chat');
                $(this).attr('disabled', true);


                window.rebound({
                    data: {
                        service: service
                    },
                    notification: false,
                    block: false,
                    url: "{{ route('jobs.start-chat') }}",
                    processData: true,
                    successCallback: function(response) {
                        console.log(response);
                        $(this).attr('disabled', false);
                    },
                    errorCallback: function(response) {
                        console.log(response);
                        $(this).attr('disabled', false);
                    }
                });

            });
        </script>
    @endpushonce
@endauth
