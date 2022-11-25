<x-dashboard.layout>
    <x-slot:title>Add Job </x-slot>

        <x-slot name="styles">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.4/tagify.css">
            <style>
                .customSuggestionsList>div {
                    max-height: 300px;
                    min-height: 50px;
                    border: 2px solid pink;
                    overflow: auto;
                }

                .customSuggestionsList .empty {
                    color: #999;
                    font-size: 20px;
                    text-align: center;
                    padding: 1em;
                }
            </style>
        </x-slot>

        <div id="content">
            <div class="content-admin-main">
                <form novalidate data-add-job>
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <label for="banner">Job Banner</label>
                            <x-utils.image-uploader width="200px" height="200px" name="banner"
                                instructions="Banner Should be <span class='text-danger'><strong>200px</strong> by <strong>200px</strong></span>" />
                        </div>

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
                            <x-utils.input name="skills" />
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.4/tagify.min.js"></script>
            <script>
                const skills = @json($skills).map(rec => {
                    return {
                        'id': rec.id,
                        'value': rec.name,
                    }
                });
                $('[data-add-job]').submit(function(e) {
                    e.preventDefault();
                    var required = $(this).find('[required]');
                    var error = false;
                    required.each(function() {
                        if ($(this).val() == '' || $(this).val() == null) {
                            console.log($(this));
                            //check if has tagify class
                            if ($(this).hasClass('tagify')) {
                                return;
                            }
                            error = true;
                            $(this).addClass('is-invalid');
                            $(this).closest('.form-group').find('.dropdown-toggle').addClass('invalid-select');
                            $(this).closest('.form-group').find('.dashboard-profile-photo').addClass(
                                'invalid-uploader');
                        } else {
                            $(this).removeClass('is-invalid');
                            $(this).closest('.form-group').find('.dropdown-toggle ').removeClass('invalid-select');
                            $(this).closest('.form-group').find('.dashboard-profile-photo').removeClass(
                                'invalid-uploader');
                        }
                    });
                    if (error) {
                        return;
                    }
                    window.rebound({
                        form: $(this),
                        reset: false,
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

                var input = document.querySelector('input[name="skills"]'),
                    tagify = new Tagify(input, {
                        whitelist: skills,
                        addTagOnBlur: true,
                        maxTags: 5,
                        dropdown: {
                            maxItems: 20,
                            classname: "tags-look",
                            enabled: 0,
                            closeOnSelect: false
                        }
                    })
            </script>
        </x-slot>



</x-dashboard.layout>
