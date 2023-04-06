@props(['contract'])
@php
    $contractData = json_decode($contract->contract, true);
@endphp

<div class="row">
    <div class="col-md-12 contract-data">
        <div class="container ">
            <div class="row m-0">
                <div class="col-md-12 col-12">
                    <div class="row">
                        <div class="col-12 mb-4 px-0">
                            <div class="box-right">

                                <h3 class="ps-3 textmuted text-center fw-bold h6 mb-0">
                                    {{ $contractData['project_title'] }}</h3>

                                <hr>
                                <p>
                                    {{ $contractData['project_description'] }}
                                </p>
                            </div>


                        </div>
                        <div class="col-12 px-0 mb-3">
                            <div class="box-right">
                                <div class="d-block mb-2">
                                    <h3 class="fw-bold text-center">Milestones</h3>
                                    <hr>
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <div class="accordion" id="acc-milestones">
                                            @foreach ($contractData['milestones'] as $key => $milestone)
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="acc-{{ $key }}">
                                                        <button class="accordion-button fs-6 " type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#acrd-{{ $key }}" aria-expanded=""
                                                            aria-controls="acrd-{{ $key }}">
                                                            Milestone {{ $key + 1 }}
                                                        </button>
                                                    </h2>
                                                    <div id="acrd-{{ $key }}"
                                                        class="accordion-collapse collapse
                                                        @if ($key == 0) show @endif
                                                        "
                                                        aria-labelledby="acc-{{ $key }}"
                                                        data-bs-parent="#acc-milestones">
                                                        <div class="accordion-body">
                                                            <div
                                                                class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                                <h4 class=" text-primary mb-2">{{ $milestone['title'] }}
                                                                </h4>

                                                            </div>
                                                            <p>
                                                                {{ $milestone['description'] }}
                                                            </p>
                                                            <div class="col-12 d-flex justify-content-between">

                                                                <div>
                                                                    Amount : <strong
                                                                        class=" fw-bolder">₹{{ $milestone['amount'] ?? 'NA' }}</strong>
                                                                </div>
                                                                <div>
                                                                    <span class="timeline-event-time text-nowrap">
                                                                        Complete Till : <span
                                                                            class="badge bg-danger">{{ $milestone['due_date'] ?? 'NA' }}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-12 mb-4">
                            <div class="row box-right">
                                @if ($contract->send_by == auth()->user()->id)
                                    <div class="col-md-12">
                                        <div class="price-breakdown">

                                            <h4 class="price-title text-center">Price Details</h6>
                                                <ul class="list-unstyled">
                                                    <li class="price-detail">
                                                        <div class="detail-title  text-success">Total Contract Value
                                                        </div>
                                                        <div data-contract-amount class="detail-amt  text-success">₹
                                                            {{ $contractData['project_cost'] }}
                                                        </div>
                                                    </li>
                                                    <li class="price-detail">
                                                        <div class="detail-title">Commission(10%) </div>
                                                        <div data-commission class="detail-amt">-₹
                                                            {{ ($contractData['project_cost'] * 10) / 100 }}

                                                        </div>
                                                    </li>

                                                </ul>
                                                <hr>
                                                <ul class="list-unstyled">
                                                    <li class="price-detail">
                                                        <div class="detail-title detail-total">Receivable Amount</div>
                                                        <div data-receivable-amount class="detail-amt fw-bolder">₹
                                                            {{ $contractData['project_cost'] - ($contractData['project_cost'] * 10) / 100 }}
                                                        </div>
                                                    </li>
                                                </ul>


                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-12">
                                        <div class="price-breakdown">

                                            <h4 class="price-title text-center">Price Details</h6>
                                                <ul class="list-unstyled">
                                                    <li class="price-detail">
                                                        <div class="detail-title  text-success">Total Contract Value
                                                        </div>
                                                        <div data-contract-amount class="detail-amt  text-success">₹
                                                            {{ $contractData['project_cost'] }}
                                                        </div>
                                                    </li>
                                                    <li class="price-detail">
                                                        <div class="detail-title">Gst </div>
                                                        <div data-commission class="detail-amt"> +₹
                                                            {{ $contractData['project_cost'] * 0.18 }}</div>
                                                    </li>

                                                </ul>
                                                <hr>
                                                <ul class="list-unstyled">
                                                    <li class="price-detail">
                                                        <div class="detail-title detail-total">Payable Amount</div>
                                                        <div data-receivable-amount class="detail-amt fw-bolder">₹
                                                            {{ $contractData['project_cost'] + $contractData['project_cost'] * 0.18 }}
                                                        </div>
                                                    </li>
                                                </ul>


                                        </div>
                                    </div>
                                @endif

                                <div class="col-12">
                                    @if ($contract->status == 'pending')

                                        @if ($contract->send_by == auth()->user()->id)
                                            @if ($contract->status == 'pending')
                                                <div class="col-12 text-center mt-4">
                                                    <span class="text-danger">
                                                        Waiting for response
                                                    </span>
                                                </div>
                                            @endif
                                        @else
                                            <div class="col-12 d-flex mt-4 justify-content-center gap-5">
                                                <button data-contract-action="{{ $contract->id }}"
                                                    data-contract-action-type="accept" class="contract-btn btn-accept">
                                                    <i class="feather-check"></i>
                                                </button>
                                                <button data-contract-action="{{ $contract->id }}"
                                                    data-contract-action-type="reject" class="contract-btn btn-reject">
                                                    <i class="feather-x"></i>
                                                </button>
                                            </div>
                                        @endif
                                    @else
                                        @if ($contract->status == 'accepted')
                                            <div class="col-12 text-center mt-4">
                                                <span class="text-success">
                                                    Contract Accepted
                                                </span>
                                            </div>
                                        @else
                                            <div class="col-12 text-center mt-4">
                                                <span class="text-danger">
                                                    Contract Rejected
                                                </span>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                {{-- <div class="col-md-5 col-12 ps-md-5 p-0 ">
                    <div class="box-left">

                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
