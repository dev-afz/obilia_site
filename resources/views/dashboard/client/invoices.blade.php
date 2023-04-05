<x-dashboard.layout>
    <x-slot:title> Invoices </x-slot>
        <x-slot name="styles">

        </x-slot>

        <div id="content">

            <div class="content-admin-main">
                <div class="row">
                    <div class="col-md-12 mt-5 px-3">
                        <div class="card">
                            <h5 class="card-header text-center">
                                Invoices
                            </h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Invoice ID</th>
                                            <th>Title</th>
                                            <th>Amount</th>
                                            <th>Generate Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($invoices as $invoice)
                                            <tr>
                                                <td>OBL-INV-{{ Str::padLeft($invoice->id, 6, '0') }}</td>
                                                <td>{{ $invoice->title }}</td>
                                                <td>₹{{ $invoice->final_amount }}</td>
                                                <td>
                                                    <a target="_blank"
                                                        href="{{ route('client.invoice.generate', $invoice->uuid) }}"
                                                        class="btn btn-primary btn-sm">Generate</a>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <x-slot name="scripts">

        </x-slot>


</x-dashboard.layout>
