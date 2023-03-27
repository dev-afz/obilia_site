<x-dashboard.layout>
    <x-slot:title>Job Invitations</x-slot>

        <x-slot name="styles">

        </x-slot>

        <div id="content">

            <div class="panel panel-default mb-4">
                <div class="panel-heading wt-panel-heading p-a20">
                    <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i> Invitation Job</h4>
                </div>
            </div>


            <div class="item row match-height">
                @forelse ($invitations as $inv)
                    <x-elements.job-card class="col-md-4" :job="$inv->job" :showBtn="false">
                        <hr>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-success btn-sm" data-invitation-id="{{ $inv->id }}"
                                data-action="accepted">Accept</button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-invitation-id="{{ $inv->id }}" data-action="rejected">Reject</button>
                        </div>

                    </x-elements.job-card>

                @empty
                    <div class="col-md-12">
                        <p class="text-center">
                            No invitations found
                        </p>
                    </div>
                @endforelse
            </div>


        </div>


        <x-slot name="scripts">
            <script>
                $('[data-action]').click(function(e) {
                    e.preventDefault();
                    const btn = $(this);
                    const action = $(this).data('action');
                    const invitationId = $(this).data('invitation-id');
                    let bidAmount = 0;
                    //ask for bid amount using notiflix
                    Notiflix.Confirm.prompt(
                        'Propasal Amount',
                        'Enter your propasal amount',
                        '0',
                        'Send',
                        'Cancel',
                        function(value) {
                            window.rebound({
                                data: {
                                    action: action,
                                    invitation_id: invitationId,
                                    bid_amount: value
                                },
                                url: "{{ route('service-provider.job.invitation-action') }}",
                                processData: true,
                                successCallback: function(response) {

                                    $(btn).closest('.twm-jobs-grid-style1').parent().remove();


                                }
                            });
                        },
                        function() {
                            //cancel
                        }
                    );
                });
            </script>

        </x-slot>



</x-dashboard.layout>
