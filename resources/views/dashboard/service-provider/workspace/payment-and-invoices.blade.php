<x-workspace.layout>
    <x-slot name="title">
        {{ $workspace->name }}
    </x-slot>
    <div class="row">
        <div class="col-md-12 mt-5 px-3">
            <div class="card">
                <h5 class="card-header text-center">Table Header &amp; Footer</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Provider</th>
                                <th>Invoice No</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                                <tr>
                                    <td>
                                        {{ fake()->name() }}
                                    </td>
                                    <td>
                                        {{ fake()->name() }}
                                    </td>
                                    <td>
                                        Inv-{{ fake()->numberBetween(100, 1000) }}
                                    </td>
                                    <td>
                                        @if (fake()->boolean())
                                            <span class="badge bg-success">Paid</span>
                                        @else
                                            <span class="badge bg-danger">Unpaid</span>
                                        @endif
                                    </td>

                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <x-slot name="scripts">

    </x-slot>
</x-workspace.layout>
