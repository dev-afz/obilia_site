<x-dashboard.layout>
    <x-slot:title>Add Job </x-slot>
        <div id="content">
            <div class="content-admin-main">
                <form novalidate data-add-job>
                    <div class="row">
                        <div class="col-md-6">
                            <x-utils.input name="title" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.select name="industry" :options="$categories" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.select name="category" :options="[]" />
                        </div>

                        <div class="col-lg-6">
                            <x-utils.select name="experience" :options="$experience_levels" />
                        </div>
                        <div class="col-lg-6">
                            <x-utils.select name="project_length" :options="$length" />
                        </div>
                        <div class="col-lg-6">
                            <x-utils.select name="project_size" :options="['small', 'medium', 'large']" />
                        </div>
                        <div class="col-lg-6">
                            <x-utils.select name="payment_type" selected="fixed" :options="['fixed']" />
                        </div>
                        <div class="col-lg-3">
                            <x-utils.input name="budget_from" type="number" />
                        </div>
                        <div class="col-lg-3">
                            <x-utils.input name="budget_to" type="number" />
                        </div>
                        <div class="col-lg-6">
                            <x-utils.select name="skills" maxSelect="3" :options="$skills" :multiple="true" />
                        </div>
                        <div class="col-lg-6">
                            <x-utils.input name="total_hours" type="number" :attrs="[['step', '0.01']]" />
                        </div>

                        <div class="col-lg-12">
                            <x-utils.input name="description" type="textarea" />
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="site-button">Save Changes</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>



        <x-slot name="scripts">
            <script>
                $('[data-add-job]').submit(function(e) {
                    e.preventDefault();
                    //check if all required fields are filled
                    var required = $(this).find('[required]');
                    var error = false;
                    required.each(function() {
                        if ($(this).val() == '' || $(this).val() == null) {
                            error = true;
                            $(this).addClass('is-invalid');
                            $(this).closest('.form-group').find('.dropdown-toggle ').addClass('invalid-select');
                        } else {
                            $(this).removeClass('is-invalid');
                            $(this).closest('.form-group').find('.dropdown-toggle ').removeClass('invalid-select');
                        }
                    });
                    if (error) {
                        return;
                    }
                    window.rebound({
                        form: $(this),
                        url: "{{ route('client.job.store') }}",
                        successCallback: function(response) {
                            console.log(response);
                        }
                    });

                });

                $('#industry').on('change', function() {
                    var id = $(this).val();
                    if (id == null) {
                        $('#category').html('<option selected disabled>Select industry fisrt</option>');
                        return;
                    }
                    $.ajax({
                        url: '{{ route('client.subcategories') }}',
                        data: {
                            category: id
                        },
                        type: 'GET',
                        success: function(data) {
                            $("#category").html('');
                            $("#category").selectpicker('destroy');

                            // $("#category").selectpicker("refresh");
                            $("#category").append('<option selected disabled>Select category</option>');
                            $.each(data, function(key, value) {
                                $('#category').append('<option value="' + value.id + '">' + value.name +
                                    '</option>');
                            });
                            $('#category').selectpicker();
                        }
                    });
                });
            </script>
        </x-slot>



</x-dashboard.layout>
