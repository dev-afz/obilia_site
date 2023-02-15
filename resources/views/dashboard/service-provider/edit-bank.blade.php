<x-dashboard.layout>
    <x-slot:title> update bank </x-slot>
        <x-slot name="styles">

        </x-slot>

        <div id="content">

            <div class="content-admin-main">
                <form id="update-user-bank">
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                Update Bank Details
                            </h4>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <x-utils.input name="account_holder_name" :value="$bank->account_holder_name" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="account_number" type="number" :value="$bank->account_number" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="ifsc_code" :value="$bank->ifsc_code" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_name" :value="$bank->name" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_branch" :value="$bank->branch" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_address" :value="$bank->address" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_city" :value="$bank->city" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="bank_state" :value="$bank->state" />
                        </div>
                        <div class="col-12 text-center mt-2">
                            <button class="btn btn-primary w-100 btn-lg">Update bank</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>


        <x-slot name="scripts">
            <script>
                $('#update-user-bank').submit(function(e) {
                    e.preventDefault();
                    window.rebound({
                        form: $(this),
                        url: "{{ route('service-provider.update-bank') }}",
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
                                    $('#bank_name').val('');
                                    $('#bank_branch').val('');
                                    $('#bank_address').val('');
                                    $('#bank_city').val('');
                                    $('#bank_state').val('');

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
