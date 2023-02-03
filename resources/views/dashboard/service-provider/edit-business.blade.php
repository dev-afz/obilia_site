<x-dashboard.layout>
    <x-slot:title> Update Business - {{ $business->name }} </x-slot>
        <x-slot name="styles">

        </x-slot>

        <div id="content">

            <div class="content-admin-main">
                <form id="update-user-business">
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                Update Business
                            </h4>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="name" label="Company Name" :value="$business->name" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="cin" label="Company CIN No." :value="$business->cin" />
                        </div>
                        <div class="col-md-12">
                            <x-utils.input name="address" label="Company Address" type="textarea" :value="$business->address" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="gst_no" label="GST No" :required="false" :value="$business->gst_no" />
                        </div>
                        <div class="col-12 text-center mt-2">
                            <button class="btn btn-primary w-100 btn-lg">Update Business</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>


        <x-slot name="scripts">
            <script>
                $('#update-user-business').submit(function(e) {
                    e.preventDefault();
                    window.rebound({
                        form: $(this),
                        url: "{{ route('service-provider.update-business') }}",
                        reset: false,
                        success: function(response) {
                            console.log(response);
                        }
                    });
                });
            </script>
        </x-slot>


</x-dashboard.layout>
