<div id="choose-your-plan" class="section-full mt-5 p-b90 site-bg-white tw-pricing-area">
    <div class="row mb-5">
        <div class="col-12 my-3">
            <div class="switch-container">
                <h2 class="m-0  feature-key">
                    Yearly
                </h2>
                <div class="feature-switch d-flex align-items-center">
                    <input type="checkbox" id="plan-switch" /><label for="plan-switch">Toggle</label>
                </div>
                <h2 class="m-0  text-primary feature-key">
                    Monthly
                </h2>
            </div>
        </div>
    </div>
    <div id="monthly-plan-container" class="container d-none">
        <div class="section-content">

            <div class="twm-tabs-style-1">
                <div class="tab-content" id="myTab3Content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="Monthly">
                        <div class="pricing-block-outer">
                            <div class="row justify-content-center match-height">
                                @forelse ($packages['monthly'] as $key => $p)
                                    <div class="col-lg-4 col-md-6 m-b30 package-container">
                                        <div @class([
                                            'pricing-table-1',
                                            'circle-pink' => $key % 2,
                                            'circle-yellow' => $key % 3,
                                        ])>
                                            <div class="p-table-title">
                                                <h4 class="wt-title">
                                                    {{ $p->name }}
                                                </h4>
                                            </div>
                                            <div class="p-table-inner d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <div class="p-table-price">
                                                        <span class="pe-0">₹{{ $p->price }}/</span>
                                                        <p>Monthly</p>
                                                    </div>
                                                    <div class="p-table-list">
                                                        <ul>
                                                            @foreach ($p->perks as $perk)
                                                                <li><i class="feather-check"></i>
                                                                    {{ $perk->value }}{{ $perk->name === 'commission' ? '% ' . str_replace('commission', 'Platform Fee', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'connection' ? str_replace('connection', 'Connections', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'job_applications' ? str_replace('job_applications', 'Job applications', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'active_workspace' ? str_replace('active_workspace', 'Workspaces', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'storage' ? str_replace('storage', ' GB Storage per workspace', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'service' ? str_replace('service', 'Services listing', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'bandwidth' ? 'GB' : '' }}
                                                                    {{-- {{ Str::ucfirst(Str::replace('_', ' ', $perk->name)) }} --}}
                                                                </li>
                                                            @endforeach


                                                        </ul>
                                                    </div>
                                                </div>
                                                @auth
                                                    @if ($p->price > 0)
                                                        <div class="p-table-btn mb-3">
                                                            <button data-buy-plan="{{ $p->id }}" type="button"
                                                                class="site-button">Purchase Now</button>

                                                        </div>
                                                    @else
                                                        <div class="p-table-btn mb-3">
                                                            <button type="button" class="site-button">Free</button>
                                                        </div>
                                                    @endif
                                                @endauth

                                                @guest
                                                    @if ($p->price > 0)
                                                        <div class="p-table-btn mb-3">
                                                            <a {{-- href="#login_popup" --}} data-bs-toggle="modal"
                                                                class="site-button">Purchase Now</a>
                                                        </div>
                                                    @else
                                                        <div class="p-table-btn mb-3">
                                                            <a {{-- href="#login_popup" --}} data-bs-toggle="modal"
                                                                class="site-button">Free</a>
                                                        </div>
                                                    @endif

                                                @endguest

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <span>No Packages Found</span>
                                @endforelse

                                <div class="col-12 text-end text-primary">
                                    <small>
                                        <i>* All incl of 18% GST</i>
                                    </small>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </div>

    </div>
    <div id="yearly-plan-container" class="container">
        <div class="section-content">

            <div class="twm-tabs-style-1">
                <div class="tab-content" id="myTab3Content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="Monthly">
                        <div class="pricing-block-outer">
                            <div class="row justify-content-center match-height">
                                @forelse ($packages['yearly'] as $key => $p)
                                    <div class="col-lg-4 col-md-6 m-b30 package-container">
                                        <div @class([
                                            'pricing-table-1',
                                            'circle-pink' => $key % 2,
                                            'circle-yellow' => $key % 3,
                                        ])>
                                            <div class="p-table-title">
                                                <h4 class="wt-title">
                                                    {{ $p->name }}
                                                </h4>
                                            </div>
                                            <div class="p-table-inner d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <div class="p-table-price">
                                                        <span class="pe-0">₹{{ $p->price }}/</span>
                                                        <p>Yearly</p>
                                                    </div>
                                                    <div class="p-table-list">
                                                        <ul>
                                                            @foreach ($p->perks as $perk)
                                                                <li><i class="feather-check"></i>
                                                                    {{ $perk->value }}{{ $perk->name === 'commission' ? '% ' . str_replace('commission', 'Platform Fee', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'connection' ? str_replace('connection', 'Connections', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'job_applications' ? str_replace('job_applications', 'Job applications', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'active_workspace' ? str_replace('active_workspace', 'Workspaces', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'storage' ? str_replace('storage', ' GB Storage per workspace', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'service' ? str_replace('service', 'Services listing', $perk->name) . '' : '' }}
                                                                    {{ $perk->name === 'bandwidth' ? 'GB' : '' }}
                                                                    {{-- {{ Str::ucfirst(Str::replace('_', ' ', $perk->name)) }} --}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                @auth
                                                    @if ($p->price > 0)
                                                        <div class="p-table-btn mb-3">
                                                            <button data-buy-plan="{{ $p->id }}" type="button"
                                                                class="site-button">Purchase Now</button>
                                                        </div>
                                                    @else
                                                        <div class="p-table-btn mb-3">
                                                            <button type="button" class="site-button">Free</button>
                                                        </div>
                                                    @endif
                                                @endauth

                                                @guest
                                                    @if ($p->price > 0)
                                                        <div class="p-table-btn mb-3">
                                                            <a {{-- href="#login_popup" --}} data-bs-toggle="modal"
                                                                class="site-button">Purchase Now</a>
                                                        </div>
                                                    @else
                                                        <div class="p-table-btn mb-3">
                                                            <a {{-- href="#login_popup" --}} data-bs-toggle="modal"
                                                                class="site-button">Free</a>
                                                        </div>
                                                    @endif

                                                @endguest

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <span>No Packages Found</span>
                                @endforelse

                                <div class="col-12 text-end text-primary">
                                    <small>
                                        <i>* All incl of 18% GST</i>
                                    </small>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>



        </div>

    </div>
    <div class="col-12 text-center text-primary">
        <small>
            <i>*connections and job applications credits are reloaded monthly.</i>
        </small>
    </div>
</div>


@pushonce('component-scripts')
    @auth
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

        <script>
            $('[data-buy-plan]').click(function(e) {
                e.preventDefault();
                const plan = $(this).data('buy-plan');

                window.rebound({
                    url: "{{ route('payment.create-order') }}",
                    data: {
                        plan: plan
                    },
                    processData: true,
                    notification: false,
                    successCallback: function(response) {
                        payOrder(response.user, response.order);
                    }
                })

            });

            function payOrder(user, order) {
                const options = {
                    "key": "{{ env('RAZORPAY_KEY') }}",
                    "name": "Obillia",
                    "description": "Test Transaction",
                    "image": "{{ asset('images/logo/logo.png') }}",
                    "order_id": order.order_id,
                    "callback_url": "{{ route('payment.fetch-order') }}",
                    "prefill": {
                        "name": user.name,
                        "email": user.email,
                        "contact": user.phone ?? '9137231270'
                    },
                    "notes": {
                        "test": "test"
                    },
                    "theme": {
                        "color": "#3399cc"
                    }
                };
                const rzp = new Razorpay(options);
                rzp.open();
            }
        </script>
    @endauth

    <script>
        $('#plan-switch').change(function(e) {
            e.preventDefault();
            console.log('changed');
            if ($(this).is(':checked')) {
                $('#monthly-plan-container').removeClass('d-none');
                $('#yearly-plan-container').addClass('d-none');
            } else {
                $('#monthly-plan-container').addClass('d-none');
                $('#yearly-plan-container').removeClass('d-none');
            }

        });
    </script>
@endpushonce
