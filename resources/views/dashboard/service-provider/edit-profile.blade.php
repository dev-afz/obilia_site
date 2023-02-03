<x-dashboard.layout>
    <x-slot:title> Edit Profile - {{ $user->name }} </x-slot>
        <x-slot name="styles">
            <style>
                .kyc-images {
                    padding: 10px;
                    border-radius: 1rem;
                    max-width: 25rem;
                    object-fit: cover;
                    display: block;
                }
            </style>
        </x-slot>

        <div id="content">

            <div class="content-admin-main">
                <form id="update-user-profile">
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                Profile Details
                            </h4>
                            <hr>
                        </div>
                        <div class="col-12">
                            <div class="col-md-12 text-center">
                                <label for="image">Profile Image</label>
                                <x-utils.image-uploader :required="false" name="image" :image="$user->images"
                                    instructions="Image should be less than 512kb" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <x-utils.input name="phone" :value="$user->phone" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.select name="gender" :search="false" :options="['male', 'female', 'other']" :selected="[$user->gender]" />
                        </div>

                        <div class="col-md-12">
                            <x-utils.select :multiple="true" name="skills" :options="$skills" :selected="$user_skills"
                                :maxSelect="5" />
                        </div>
                        <div class="col-12">
                            <h4>
                                Kyc Details
                            </h4>
                            <hr>
                        </div>
                        <div class="col-md-6">

                            @if ($aadhar_kyc)
                                <div>
                                    <label for="image">Aadhar Image</label>
                                    <img class="kyc-images" src="{{ $aadhar_kyc->file }}" alt="aadhar">
                                </div>
                            @else
                                <label for="image">Aadhar Image</label>
                                <x-utils.image-uploader :required="false" :height="300" :width="400"
                                    name="aadhar" instructions="Image should be less than 2mb" />
                            @endif
                        </div>

                        <div class="col-md-6">
                            @if ($pan_kyc)
                                <div>
                                    <label class="d-block" for="image">Pan Image</label>
                                    <img class="kyc-images" src="{{ $pan_kyc->file }}" alt="pan">
                                </div>
                            @else
                                <label class="d-block" for="image">Pan Image</label>
                                <x-utils.image-uploader :required="false" :height="300" :width="400"
                                    name="pan" instructions="Image should be less than 2mb" />
                            @endif
                        </div>

                        <div class="col-12 text-center mt-2">
                            <button class="btn btn-primary w-100 btn-lg">Save</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>


        <x-slot name="scripts">
            <script>
                $('#update-user-profile').submit(function(e) {
                    e.preventDefault();
                    window.rebound({
                        form: $(this),
                        url: "{{ route('service-provider.update-profile') }}",
                        reset: false,
                        success: function(response) {
                            console.log(response);
                        }
                    });
                });
            </script>
        </x-slot>


</x-dashboard.layout>
