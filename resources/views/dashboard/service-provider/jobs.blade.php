<x-dashboard.layout>
    <x-slot:title> Applied Jobs </x-slot>
        <div id="content">

            <div class="content-admin-main">
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i> Applied </h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <div class="twm-D_table p-a20 table-responsive">
                            <livewire:tables.service-provider.job-application-data-table />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-slot:scripts>

            </x-slot>


</x-dashboard.layout>
