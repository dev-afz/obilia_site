<x-dashboard.layout>
    <x-slot:title> Add Contract </x-slot>
        <x-slot name="styles">
            <style>

            </style>
        </x-slot>

        <div id="content">
            <div class="content-admin-main">
                <div class="wt-admin-right-page-header clearfix">
                    <h2>Create Contract</h2>
                    <hr>
                </div>
                <form id="add-contract">
                    <div class="content-admin-main">
                        <div class="row">

                            <div class="col-md-12">
                                <x-utils.input name="project_title" />
                                <input type="text" hidden value="{{ $chat->uuid }}" name="chat_id" id="chat_id">
                            </div>
                            <div class="col-md-6">
                                <x-utils.input name="contract_date" />
                            </div>
                            <div class="col-md-6">
                                <x-utils.input name="project_cost" />
                            </div>
                            <div class="col-md-12">
                                <x-utils.input name="project_description" type="textarea" />
                            </div>
                            <div class="col-12">
                                <div class="divider">
                                    <div class="divider-text">Milestone</div>
                                </div>
                                <x-utils.repeater :minLimit="1" name="milestone"
                                    addButtonLabel="<i class='fa fa-plus'></i> Add Milestone"
                                    :fields="[
                                        ['name' => 'title', 'col' => 8],
                                        ['name' => 'amount', 'type' => 'number', 'col' => 4],
                                        ['name' => 'description', 'type' => 'textarea', 'col' => 11],
                                    ]" />
                            </div>

                            <div class="col-md-12">
                                <x-utils.input-file name="contract_file" />
                            </div>

                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success btn-lg w-100">
                            Create Contract
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @section('scripts')
            <script>
                $('#add-contract').submit(function(e) {
                    e.preventDefault();
                    window.rebound({
                        form: '#add-contract',
                        url: '{{ route('client.contract.store') }}',
                        successCallback: function(response) {
                            console.log(response);
                        }
                    })
                });
            </script>
        @endsection



</x-dashboard.layout>
