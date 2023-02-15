<div class="section-full p-t120 p-b90 site-bg-white tw-pricing-area">

    <div class="container">

        <!-- TITLE START-->
        <div class="section-head left wt-small-separator-outer">
            <div class="wt-small-separator site-text-primary">
                <div>Choose Your Plan</div>
            </div>
            <h2 class="wt-title">Save up to 10%</h2>
        </div>
        <!-- TITLE END-->

        <div class="section-content">

            <div class="twm-tabs-style-1">
                {{-- <ul class="nav nav-tabs" id="myTab3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Monthly" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab">Monthly</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="annual" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile">Annual</button>
                    </li>

                </ul> --}}
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
                                                <div class="p-table-btn mb-5">
                                                    <a href="#" class="site-button">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <span>No Packages Found</span>
                                @endforelse



                            </div>
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="annual">
                        <div class="pricing-block-outer">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 m-b30">
                                    <div class="pricing-table-1">
                                        <div class="p-table-title">
                                            <h4 class="wt-title">
                                                Basic
                                            </h4>
                                        </div>
                                        <div class="p-table-inner">
                                            <div class="p-table-price">
                                                <span>$149/</span>
                                                <p>Monthly</p>
                                            </div>
                                            <div class="p-table-list">
                                                <ul>
                                                    <li><i class="feather-check"></i>1 job posting</li>
                                                    <li class="disable"><i class="feather-x"></i>0 featured
                                                        job
                                                    </li>
                                                    <li class="disable"><i class="feather-x"></i>job displayed
                                                        fo
                                                        20 days</li>
                                                    <li class="disable"><i class="feather-x"></i>Premium
                                                        support
                                                        24/7</li>
                                                </ul>
                                            </div>
                                            <div class="p-table-btn">
                                                <a href="about-1.html" class="site-button">Purchase Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 p-table-highlight m-b30">
                                    <div class="pricing-table-1 circle-yellow">
                                        <div class="p-table-recommended">Recommended</div>
                                        <div class="p-table-title">
                                            <h4 class="wt-title">
                                                Standard
                                            </h4>
                                        </div>
                                        <div class="p-table-inner">

                                            <div class="p-table-price">
                                                <span>$499/</span>
                                                <p>Monthly</p>
                                            </div>
                                            <div class="p-table-list">
                                                <ul>
                                                    <li><i class="feather-check"></i>1 job posting</li>
                                                    <li><i class="feather-check"></i>0 featured job</li>
                                                    <li><i class="feather-check"></i>job displayed fo 20 days
                                                    </li>
                                                    <li class="disable"><i class="feather-x"></i>Premium
                                                        support
                                                        24/7</li>
                                                </ul>
                                            </div>
                                            <div class="p-table-btn">
                                                <a href="about-1.html" class="site-button">Purchase Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 m-b30">
                                    <div class="pricing-table-1 circle-pink">
                                        <div class="p-table-title">
                                            <h4 class="wt-title">
                                                Extended
                                            </h4>
                                        </div>
                                        <div class="p-table-inner">
                                            <div class="p-table-price">
                                                <span>$1499/</span>
                                                <p>Monthly</p>
                                            </div>
                                            <div class="p-table-list">
                                                <ul>
                                                    <li><i class="feather-check"></i>1 job posting</li>
                                                    <li><i class="feather-check"></i>0 featured job</li>
                                                    <li><i class="feather-check"></i>job displayed fo 20 days
                                                    </li>
                                                    <li><i class="feather-check"></i>Premium support 24/7</li>
                                                </ul>
                                            </div>
                                            <div class="p-table-btn">
                                                <a href="about-1.html" class="site-button">Purchase Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>



        </div>

    </div>
</div>
