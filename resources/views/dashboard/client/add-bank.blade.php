<x-dashboard.layout>
    <x-slot:title> Add bank </x-slot>
        <x-slot name="styles">

        </x-slot>

        <div id="content">

            <div class="content-admin-main">
                <form id="add-user-bank">
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                Add Bank Details
                            </h4>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <x-utils.input name="account_holder_name" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="account_number" type="number" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="ifsc_code" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_name" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_branch" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_address" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_city" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_state" />
                        </div>
                        <div class="col-12 text-center mt-2">
                            <button class="btn btn-primary w-100 btn-lg">Add bank</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>


        <x-slot name="scripts">
            <script>
                $('#add-user-bank').submit(function(e) {
                    e.preventDefault();
                    window.rebound({
                        form: $(this),
                        url: "{{ route('client.store-bank') }}",
                        reset: false,
                        success: function(response) {
                            console.log(response);
                        }
                    });
                });

                $('#ifsc_code').change(function(e) {
                    e.preventDefault();
                    const ifsc_code = $(this).val();
                    if (ifsc_code.length == 11) {
                        Notiflix.Block.dots('.content-admin-main', 'Fetching bank details...');
                        fetch(`https://ifsc.razorpay.com/${ifsc_code}`)
                            .then(response => {
                                if (response.status == 200) {
                                    return response.json();
                                } else {
                                    Notiflix.Block.remove('.content-admin-main');
                                    Notiflix.Notify.failure('Invalid IFSC code');
                                    throw new Error('Invalid IFSC code');
                                }
                            })
                            .then(data => {
                                $('#bank_name').val(data.BANK);
                                $('#bank_branch').val(data.BRANCH);
                                $('#bank_address').val(data.ADDRESS);
                                $('#bank_city').val(data.CITY);
                                $('#bank_state').val(data.STATE);
                                setTimeout(() => {
                                    Notiflix.Block.remove('.content-admin-main');
                                }, 500);
                            });
                    }
                });
            </script>
        </x-slot>


</x-dashboard.layout>
