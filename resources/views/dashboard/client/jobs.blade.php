<x-dashboard.layout>
    <x-slot:title> Jobs </x-slot>
        <x-slot:styles> @vite(['resources/css/dataTables.bootstrap5.min.css'])</x-slot>
            <div id="content">

                <div class="content-admin-main">

                    <div class="wt-admin-right-page-header clearfix">
                        <h2>Manage Jobs</h2>
                        <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>My Job
                                Listing</span></div>
                    </div>

                    <!--Basic Information-->
                    <div class="panel panel-default">
                        <div class="panel-heading wt-panel-heading p-a20">
                            <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i> Job Details</h4>
                        </div>
                        <div class="panel-body wt-panel-body p-a20 m-b30 ">
                            <div class="twm-D_table p-a20 table-responsive">
                                <livewire:tables.job-data-table />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <x-slot:scripts>
                @vite(['resources/js/jquery.dataTables.min.js', 'resources/js/dataTables.bootstrap5.min.js'])
                {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js"></script> --}}
                </x-slot>


</x-dashboard.layout>
