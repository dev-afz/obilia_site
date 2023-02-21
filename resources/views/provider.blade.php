<x-layout>

    <x-slot name="title"> Provider - </x-slot>
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

            .like-btn {
                position: absolute;
                top: 1rem;
                right: 1rem;
            }

            .checked {
                color: orange;
            }
        </style>
    </x-slot>


    <div class="section-full pt-4 p-b90 site-bg-white">

        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-4">
                    <div class="card p-3 d-flex align-items-center twm-s-info ">
                        <div class="avatar">
                            <img src="{{ $user->images ?? asset('images/user-avtar/pic1.jpg') }}" alt="">
                        </div>
                        <button class="like-btn bg-primary text-white"
                            @auth()
                                data-start-chat="{{ $user->services->first()->id }}"
                           @disabled(auth()->user()->id == $user->id)
                           @endauth
                            @guest data-bs-target="#login_popup"
                                data-bs-toggle="modal" @endguest>
                            <i class="fa fa-comment"></i>
                        </button>

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
                                                <i class="fas fa-phone"></i>
                                                <span class="twm-title">Mobile</span>
                                                <div class="twm-s-info-discription">{{ $user->phone }}</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-user-circle"></i>
                                                <span class="twm-title">Gender</span>
                                                <div class="twm-s-info-discription">
                                                    {{ ucfirst($user->gender ?? 'NA') }}
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
                                    </ul>
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
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="row match-height" id="service-list">
                            @forelse ($user->services as $service)
                                {{-- @dump($service->images->first()->image) --}}
                                <x-elements.user-service :service="$service" class="col-md-6 mb-3" :showLikeButton="false" />

                            @empty
                                <div class="col-12">
                                    <div class="alert alert-warning">
                                        <h4 class="alert-heading">No Services Found</h4>
                                        <p>Sorry, No Services Found</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>

</x-layout>
