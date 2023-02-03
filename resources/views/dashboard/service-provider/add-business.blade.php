<x-dashboard.layout>
    <x-slot:title> Add Business </x-slot>
        <x-slot name="styles">

        </x-slot>

        <div id="content">

            <div class="content-admin-main">
                <form id="add-user-business">
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                Add Business
                            </h4>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="name" label="Company Name" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="cin" label="Company CIN No." />
                        </div>
                        <div class="col-md-12">
                            <x-utils.input name="address" label="Company Address" type="textarea" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input-file name="incorporation_certificate" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="gst_no" label="GST No" :required="false" />
                        </div>
                        <div class="col-12 text-center mt-2">
                            <button class="btn btn-primary w-100 btn-lg">Add Business</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>


        <x-slot name="scripts">
            <script>
                $('#add-user-business').submit(function(e) {
                    e.preventDefault();
                    window.rebound({
                        form: $(this),
                        url: "{{ route('service-provider.store-business') }}",
                        reset: false,
                        success: function(response) {
                            console.log(response);
                        }
                    });
                });
            </script>
        </x-slot>


</x-dashboard.layout>
