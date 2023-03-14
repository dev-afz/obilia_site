<x-dashboard.layout>
    <x-slot:title> Jobs </x-slot>

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

</x-dashboard.layout>
