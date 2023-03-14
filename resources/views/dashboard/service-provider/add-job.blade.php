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
                <div class="panel panel-default mb-4">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i> Add Job</h4>
                    </div>
                </div>
                <form novalidate data-add-job>
                    <div class="row">

                        <div class="col-md-6">
                            <x-utils.input name="title" />
                        </div>
                        <div class="col-md-6">
                            <x-utils.select name="category" :options="$industries" />
                        </div>
                        <div class="col-md-4">
                            <x-utils.select name="sub_category" :options="[]" />
                        </div>
                        <div class="col-md-4">
                            <x-utils.select name="tag" :options="[]" />
                        </div>


                        <div class="col-lg-4">
                            <x-utils.select name="experience" :options="$experience_levels" />
                        </div>
                        <div class="col-lg-6">
                            <x-utils.select name="project_length" :options="$length" />
                        </div>
                        <div class="col-lg-6">
                            <x-utils.select name="project_size" :search="false" :options="['small', 'medium', 'large']" />
                        </div>


                        <div class="col-lg-4">
                            <x-utils.input name="budget_from" type="number" />
                        </div>
                        <div class="col-lg-4">
                            <x-utils.input name="budget_to" type="number" />
                        </div>
                        <div class="col-lg-4">
                            <x-utils.select name="visibility" :selected="['public']" :search="false" :options="['public', 'private']" />
                        </div>
                        <div class="col-lg-12">
                            <x-utils.input name="skills" />
                        </div>


                        <div class="col-lg-12">
                            <x-utils.input name="description" type="textarea" />
                        </div>
                        <div class="col-12 mb-3">
                            <h4 class="text-center">Add Responsibilities</h4>
                            <hr>
                            <div data-repeater data-repeater-min="1">
                                <div data-repeat class="row">
                                    <div class="col-md-10">
                                        <x-utils.input :multiple="true" :required="false" name="responsibilities" />
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <div>
                                            <button type="button" class="btn btn-danger" data-repeater-delete>
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="button" data-repeater-btn class="btn btn-success">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>

                            </div>

                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary d-block w-100">Add Job</button>
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
                    if (window.validateRequired($(this))) {
                        return;
                    }
                    window.rebound({
                        form: $(this),
                        reset: false,
                        url: "{{ route('service-provider.job.store') }}",
                        successCallback: function(response) {
                            console.log(response);
                        }
                    });

                });

                $('#category').on('change', function() {
                    var id = $(this).val();
                    if (id == null) {
                        $('#sub_category').html('<option selected disabled>Select Category fisrt</option>');
                        return;
                    }
                    $.ajax({
                        url: '{{ route('service-provider.category') }}',
                        data: {
                            industry_id: id
                        },
                        type: 'GET',
                        success: function(data) {
                            $("#sub_category").html('');
                            $("#sub_category").selectpicker('destroy');

                            // $("#sub_category").selectpicker("refresh");
                            $("#sub_category").append('<option selected disabled>Select Sub Category</option>');
                            $.each(data, function(key, value) {
                                $('#sub_category').append('<option value="' + value.id + '">' + value
                                    .name +
                                    '</option>');
                            });
                            $('#sub_category').selectpicker();
                        }
                    });
                });

                $('#sub_category').on('change', function() {
                    var id = $(this).val();
                    if (id == null) {
                        $('#tag').html('<option selected disabled>Select Sub Category fisrt</option>');
                        return;
                    }
                    $.ajax({
                        url: '{{ route('service-provider.subcategories') }}',
                        data: {
                            category: id
                        },
                        type: 'GET',
                        success: function(data) {
                            $("#tag").html('');
                            $("#tag").selectpicker('destroy');

                            // $("#tag").selectpicker("refresh");
                            $("#tag").append('<option selected disabled>Select Tag</option>');
                            $.each(data, function(key, value) {
                                $('#tag').append('<option value="' + value.id + '">' + value
                                    .name +
                                    '</option>');
                            });
                            $('#tag').selectpicker();
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
                const repeater_data = $('[data-repeater] > [data-repeat]').clone();
                $('[data-repeater-btn]').on('click', function() {
                    $('[data-repeater] > [data-repeat]').last().after(repeater_data.clone());
                });
                $('[data-repeater]').on('click', '[data-repeater-delete]', function() {
                    const min = $(this).closest('[data-repeater]').data('repeater-min');

                    if ($('[data-repeater] > [data-repeat]').length > min) {
                        $(this).closest('[data-repeat]').slideUp(300, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('You must have at least ' + min + ' responsibilities');
                    }


                });
            </script>
        </x-slot>



</x-dashboard.layout>
