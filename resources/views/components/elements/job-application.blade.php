@forelse ($applications as $apl)
    <div class="{{ $class ?? 'col-md-6' }}">
        <div class="twm-candidates-grid-style1  mb-5">
            <div class=" position-absolute top-2 left-1">
                <button
                    data-bid="{{ json_encode([
                        'bid_price' => $apl->bid_price,
                        'work_letter' => $apl->work_letter,
                        'document' => $apl->document,
                    ]) }}"
                    data-toggle="tooltip" data-placement="top" title="View Bid Data" class="apl_view border-0"><i
                        class="fa fa-eye"></i></button>
            </div>
            <div class="twm-media">
                <div class="twm-media-pic">
                    <img src="{{ $apl->user->image ?? asset('images/logo/logo.png') }}" alt="#">
                </div>
                <div class="twm-candidates-tag  "><span>Featured</span></div>
            </div>
            <div class="twm-mid-content">
                <a href="candidate-detail.html" class="twm-job-title">
                    <h4>{{ $apl->user->name }}</h4>
                </a>
                <strong>Propsal Amount :</strong>
                <span>{{ $apl->bid_price }}</span>
                <p> <strong>Status :</strong> @switch($apl->status)
                        @case('pending')
                            <span class="badge bg-warning">Pending</span>
                        @break

                        @case('accepted')
                            <span class="badge bg-success">Accepted</span>
                        @break

                        @case('rejected')
                            <span class="badge bg-danger">Rejected</span>
                        @break

                        @default
                    @endswitch
                </p>

                <div class="twm-fot-content">
                    <div @class([
                        'twm-left-info',
                        'justify-content-end' => $apl->status == 'accepted',
                    ])>
                        @if ($apl->status === 'pending')
                            <div class="_frs_rate_ptop">
                                <button data-application-action="accepted" data-application-id="{{ $apl->id }}"
                                    data-toggle="tooltip" data-placement="top" title="Accept"
                                    class="check__accept border-0"><i class="feather-check fs-5 fw-bold"></i></button>
                            </div>

                            <div class="_dash_remove_wrap">
                                <button data-application-action="rejected" data-application-id="{{ $apl->id }}"
                                    data-toggle="tooltip" data-placement="top" title="Reject"
                                    class="cross__reject border-0"><i class="feather-x fs-5 fw-bold"></i></button>
                            </div>
                        @endif

                        @if ($apl->status == 'accepted')
                            <div class="d-flex align-items-center text-success text-end">
                                <strong>Accepted Date : </strong>
                                {{ $apl->updated_at->format('d M, y') }}
                            </div>
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </div>
    @empty
        <div class="col-md-12">
            <div class="alert alert-warning">
                No Application Found
            </div>
        </div>
    @endforelse
