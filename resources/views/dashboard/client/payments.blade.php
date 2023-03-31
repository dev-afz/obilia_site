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
                                Payment History
                            </h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Amount</th>
                                            <th>Transaction ID</th>
                                            <th>Generate Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($payments as $payment)
                                            <tr>
                                                <td>{{ $payment->order_id }}</td>
                                                <td>{{ $payment->amount }}</td>
                                                <td>{{ $payment->transaction_id ?? 'NA' }}</td>
                                                <td>
                                                    <a href="{{ route('client.invoice.generate', $payment->order_id) }}"
                                                        class="btn btn-primary btn-sm">Generate Invoice</a>
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
