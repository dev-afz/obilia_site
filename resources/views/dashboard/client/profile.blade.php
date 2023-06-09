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

            .accordion-button {
                color: #17171d !important;
            }

            .tagify {
                height: fit-content;
            }
        </style>
    </x-slot>

    <x-slot name="title"> Profile </x-slot>
    <div id="content">

        <div class="content-admin-main">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card p-3 d-flex align-items-center twm-s-info ">
                        <div class="avatar">
                            <img src="{{ $user->images ?? asset('images/user-avtar/pic1.jpg') }}" alt="">
                        </div>

                        <div class="name text-center mt-4">
                            <h4 class="mb-0">{{ $user->name }}</h4>
                            <span>{{ $user->email }}</span>
                        </div>
                        <hr>
                        <x-utils.accordion class="w-100 " :items="['user_details', 'kyc_details', 'business_details', 'bank_details']">
                            <x-slot name="user_details">
                                <div class="px-2 w-100 position-relative">
                                    <a style="right: 1rem;z-index:10;"
                                        class="position-absolute top-0 z-10 btn btn-primary btn-sm"
                                        href="{{ route('client.edit-profile') }}">Edit</a>
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
                                                <div class="twm-s-info-discription">{{ $user->phone ?? 'NA' }}</div>
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
                                            href="{{ route('client.edit-business') }}">Edit</a>
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
                                                href="{{ route('client.add-business') }}">Add Business
                                                Details
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </div>
                                    @endif






                                </div>
                            </x-slot>

                            <x-slot name="bank_details">
                                <div class="px-2 w-100 position-relative">
                                    @if ($user->bank)
                                        <a style="right: 1rem;z-index:10;"
                                            class="position-absolute top-0 z-10 btn btn-primary btn-sm"
                                            href="{{ route('client.edit-bank') }}">Edit</a>
                                        <ul>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Account Holder Name</span>
                                                    <div class="twm-s-info-discription">
                                                        {{ $user->bank->account_holder_name }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Bank Name</span>
                                                    <div class="twm-s-info-discription">
                                                        {{ $user->bank->name }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Account Number</span>
                                                    <div class="twm-s-info-discription">
                                                        {{ $user->bank->account_number }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">IFCS Code</span>
                                                    <div class="twm-s-info-discription">
                                                        {{ $user->bank->ifsc_code }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Bank Branch</span>
                                                    <div class="twm-s-info-discription">
                                                        {{ $user->bank->branch }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Bank Address</span>
                                                    <div class="twm-s-info-discription">
                                                        {{ $user->bank->address }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Bank City</span>
                                                    <div class="twm-s-info-discription">
                                                        {{ $user->bank->city }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span class="twm-title">Bank State</span>
                                                    <div class="twm-s-info-discription">
                                                        {{ $user->bank->state }}
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    @else
                                        <div class="text-center">
                                            <a href="{{ route('client.add-bank') }}" class="btn btn-primary btn-sm">
                                                Add Bank Details
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </x-slot>
                        </x-utils.accordion>
                    </div>

                </div>

            </div>
        </div>
    </div>





    <x-slot name="scripts">
        <script></script>

    </x-slot>

</x-dashboard.layout>
