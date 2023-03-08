<x-dashboard.layout>
    <x-slot:title> Workspaces </x-slot>

        <x-slot name="styles">

        </x-slot>
        <div id="content">

            <div class="content-admin-main">

                <div class="wt-admin-right-page-header clearfix">
                    <h2>Workspaces</h2>

                </div>

                <!--Basic Information-->
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i> All Workspaces</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <div class="main-container">

                            <div class="cards row justify-content-start">
                                @forelse ($workspaces as $w)
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card__icon" style="color: {{ $w->color1 }}"><i
                                                    class="fas fa-bolt"></i></div>
                                            <h4 class="card__title">
                                                {{ $w->name }}
                                            </h4>
                                            <p class="card__apply">
                                                <a class="card__link"
                                                    href="{{ route('service-provider.workspace.show', $w->slug) }}">Open
                                                    <i class="fas fa-arrow-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-dashboard.layout>
