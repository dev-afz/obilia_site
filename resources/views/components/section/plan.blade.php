<div class="section-full  p-b90 site-bg-white tw-pricing-area">

    <div class="container">

        <div class="section-head left wt-small-separator-outer">
            <div class="wt-small-separator site-text-primary">
                <div>Choose Your Plan</div>
            </div>
            {{-- <h2 class="wt-title">Save up to 10%</h2> --}}
        </div>
        <div class="section-content">

            <div class="twm-tabs-style-1">
                <div class="tab-content" id="myTab3Content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="Monthly">
                        <div class="pricing-block-outer">
                            <div class="row justify-content-center match-height">
                                @forelse ($packages as $key => $p)
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
                                                        <span>₹{{ $p->price }}/</span>
                                                        <p>Monthly</p>
                                                    </div>
                                                    <div class="p-table-list">
                                                        <ul>
                                                            @foreach ($p->perks as $perk)
                                                                <li><i class="feather-check"></i>
                                                                    {{ $perk->value == 'yes' ? '' : Str::ucfirst($perk->value) }}
                                                                    {{ Str::ucfirst(Str::replace('_', ' ', $perk->name)) }}
                                                                </li>
                                                            @endforeach


                                                        </ul>
                                                    </div>
                                                </div>
                                                @auth
                                                    <div class="p-table-btn mb-3">
                                                        <a href="#" class="site-button">Purchase Now</a>
                                                    </div>
                                                @endauth

                                                @guest
                                                    <div class="p-table-btn mb-3">
                                                        <a href="#login_popup" data-bs-toggle="modal"
                                                            class="site-button">Purchase Now</a>
                                                    </div>
                                                @endguest
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <span>No Packages Found</span>
                                @endforelse



                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </div>

    </div>
</div>
