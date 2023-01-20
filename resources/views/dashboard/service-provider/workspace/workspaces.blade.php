<x-dashboard.layout>
    <x-slot:title> Workspaces </x-slot>

        <x-slot name="styles">
            <style>
                .heading {
                    text-align: center;
                }

                .heading__title {
                    font-weight: 600;
                }

                .heading__credits {
                    margin: 10px 0px;
                    color: #888888;
                    font-size: 25px;
                    transition: all 0.5s;
                }

                .heading__link {
                    text-decoration: none;
                }

                .heading__credits .heading__link {
                    color: inherit;
                }

                /* CARDS */

                .cards {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                }

                .card {
                    margin: 20px;
                    padding: 20px;
                    width: 500px;
                    min-height: 200px;
                    display: grid;
                    grid-template-rows: 20px 50px 1fr 50px;
                    border-radius: 10px;
                    transition: all 0.2s;
                }

                .card:hover {
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                    transform: scale(1.01);
                }

                .card__link,
                .card__exit,
                .card__icon {
                    position: relative;
                    text-decoration: none;
                    color: rgba(255, 255, 255, 0.9);
                }

                .card__link::after {
                    position: absolute;
                    top: 25px;
                    left: 0;
                    content: "";
                    width: 0%;
                    height: 3px;
                    background-color: rgba(255, 255, 255, 0.6);
                    transition: all 0.5s;
                }

                .card__link:hover::after {
                    width: 100%;
                }

                .card__exit {
                    grid-row: 1/2;
                    justify-self: end;
                }

                .card__icon {
                    grid-row: 2/3;
                    font-size: 30px;
                }

                .card__title {
                    grid-row: 3/4;
                    font-weight: 400;
                    color: #ffffff !important;
                }

                .card__apply {
                    grid-row: 4/5;
                    align-self: center;
                }

                /* RESPONSIVE */

                @media (max-width: 1600px) {
                    .cards {
                        justify-content: center;
                    }
                }
            </style>
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

                            <div class="cards">
                                @forelse ($workspaces as $w)
                                    <div style="background: radial-gradient({{ $w->color1 }}, {{ $w->color2 }})"
                                        class="card">
                                        <div class="card__icon"><i class="fas fa-bolt"></i></div>
                                        <h4 class="card__title">
                                            {{ $w->name }}
                                        </h4>
                                        <p class="card__apply">
                                            <a class="card__link"
                                                href="{{ route('client.workspace.show', $w->slug) }}">Open <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </p>
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
