<x-dashboard.layout>
    <x-slot:title> Invoices </x-slot>
        <x-slot name="styles">
            <style>
                .invoice-preview .invoice-padding,
                .invoice-edit .invoice-padding,
                .invoice-add .invoice-padding {
                    padding-left: 2.5rem;
                    padding-right: 2.5rem;
                }

                .mb-25 {
                    margin-bottom: 0.25rem;
                }

                .mb-75 {
                    margin-bottom: 0.75rem;
                }

                .invoice-preview .invoice-padding,
                .invoice-edit .invoice-padding,
                .invoice-add .invoice-padding {
                    padding-left: 2.5rem;
                    padding-right: 2.5rem;
                }

                .invoice-preview .table th:first-child,
                .invoice-preview .table td:first-child,
                .invoice-edit .table th:first-child,
                .invoice-edit .table td:first-child,
                .invoice-add .table th:first-child,
                .invoice-add .table td:first-child {
                    padding-left: 2.5rem;
                }

                .invoice-preview .logo-wrapper,
                .invoice-edit .logo-wrapper,
                .invoice-add .logo-wrapper {
                    display: flex;
                    align-items: center;
                    margin-bottom: 1.9rem;
                }

                .invoice-preview .logo-wrapper .invoice-logo,
                .invoice-edit .logo-wrapper .invoice-logo,
                .invoice-add .logo-wrapper .invoice-logo {
                    font-size: 2.142rem;
                    font-weight: bold;
                    letter-spacing: -0.54px;
                    margin-left: 1rem;
                    margin-bottom: 0;
                }

                .invoice-preview .invoice-title,
                .invoice-edit .invoice-title,
                .invoice-add .invoice-title {
                    font-size: 1.285rem;
                    margin-bottom: 1rem;
                }

                .invoice-preview .invoice-title .invoice-number,
                .invoice-edit .invoice-title .invoice-number,
                .invoice-add .invoice-title .invoice-number {
                    font-weight: 600;
                }

                .invoice-preview .invoice-date-wrapper,
                .invoice-edit .invoice-date-wrapper,
                .invoice-add .invoice-date-wrapper {
                    display: flex;
                    align-items: center;
                }

                .invoice-preview .invoice-date-wrapper:not(:last-of-type),
                .invoice-edit .invoice-date-wrapper:not(:last-of-type),
                .invoice-add .invoice-date-wrapper:not(:last-of-type) {
                    margin-bottom: 0.5rem;
                }

                .invoice-preview .invoice-date-wrapper .invoice-date-title,
                .invoice-edit .invoice-date-wrapper .invoice-date-title,
                .invoice-add .invoice-date-wrapper .invoice-date-title {
                    width: 7rem;
                    margin-bottom: 0;
                }

                .invoice-preview .invoice-date-wrapper .invoice-date,
                .invoice-edit .invoice-date-wrapper .invoice-date,
                .invoice-add .invoice-date-wrapper .invoice-date {
                    margin-left: 0.5rem;
                    font-weight: 600;
                    margin-bottom: 0;
                }

                .invoice-preview .invoice-spacing,
                .invoice-edit .invoice-spacing,
                .invoice-add .invoice-spacing {
                    margin: 1.45rem 0;
                }

                .invoice-preview .invoice-number-date .title,
                .invoice-edit .invoice-number-date .title,
                .invoice-add .invoice-number-date .title {
                    width: 115px;
                }

                .invoice-preview .invoice-total-wrapper,
                .invoice-edit .invoice-total-wrapper,
                .invoice-add .invoice-total-wrapper {
                    width: 100%;
                    max-width: 12rem;
                }

                .invoice-preview .invoice-total-wrapper .invoice-total-item,
                .invoice-edit .invoice-total-wrapper .invoice-total-item,
                .invoice-add .invoice-total-wrapper .invoice-total-item {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                .invoice-preview .invoice-total-wrapper .invoice-total-item .invoice-total-title,
                .invoice-edit .invoice-total-wrapper .invoice-total-item .invoice-total-title,
                .invoice-add .invoice-total-wrapper .invoice-total-item .invoice-total-title {
                    margin-bottom: 0.35rem;
                }

                .invoice-preview .invoice-total-wrapper .invoice-total-item .invoice-total-amount,
                .invoice-edit .invoice-total-wrapper .invoice-total-item .invoice-total-amount,
                .invoice-add .invoice-total-wrapper .invoice-total-item .invoice-total-amount {
                    margin-bottom: 0.35rem;
                    font-weight: 600;
                }

                @media (min-width: 768px) {

                    .invoice-preview .invoice-title,
                    .invoice-edit .invoice-title,
                    .invoice-add .invoice-title {
                        text-align: right;
                        margin-bottom: 3rem;
                    }
                }

                .invoice-edit .invoice-preview-card .invoice-title,
                .invoice-add .invoice-preview-card .invoice-title {
                    text-align: left;
                    margin-right: 3.5rem;
                    margin-bottom: 0;
                }

                .invoice-edit .invoice-preview-card .invoice-edit-input,
                .invoice-edit .invoice-preview-card .invoice-edit-input-group,
                .invoice-add .invoice-preview-card .invoice-edit-input,
                .invoice-add .invoice-preview-card .invoice-edit-input-group {
                    max-width: 11.21rem;
                }

                .invoice-edit .invoice-preview-card .invoice-product-details,
                .invoice-add .invoice-preview-card .invoice-product-details {
                    background-color: #fcfcfc;
                    padding: 3.75rem 3.45rem 2.3rem 3.45rem;
                }

                .invoice-edit .invoice-preview-card .invoice-product-details .product-details-border,
                .invoice-add .invoice-preview-card .invoice-product-details .product-details-border {
                    border: 1px solid #ebe9f1;
                    border-radius: 0.357rem;
                }

                .invoice-edit .invoice-preview-card .invoice-to-title,
                .invoice-add .invoice-preview-card .invoice-to-title {
                    margin-bottom: 1.9rem;
                }

                .invoice-edit .invoice-preview-card .col-title,
                .invoice-add .invoice-preview-card .col-title {
                    position: absolute;
                    top: -1.75rem;
                }

                .invoice-edit .invoice-preview-card .item-options-menu,
                .invoice-add .invoice-preview-card .item-options-menu {
                    min-width: 20rem;
                }

                .invoice-edit .invoice-preview-card .repeater-wrapper:not(:last-child),
                .invoice-add .invoice-preview-card .repeater-wrapper:not(:last-child) {
                    margin-bottom: 3rem;
                }

                .invoice-edit .invoice-preview-card .invoice-calculations .total-amt-title,
                .invoice-add .invoice-preview-card .invoice-calculations .total-amt-title {
                    width: 100px;
                }

                @media (max-width: 769px) {

                    .invoice-edit .invoice-preview-card .invoice-title,
                    .invoice-add .invoice-preview-card .invoice-title {
                        margin-right: 0;
                        width: 115px;
                    }

                    .invoice-edit .invoice-preview-card .invoice-edit-input,
                    .invoice-add .invoice-preview-card .invoice-edit-input {
                        max-width: 100%;
                    }
                }

                @media (max-width: 992px) {

                    .invoice-edit .col-title,
                    .invoice-add .col-title {
                        position: unset !important;
                        top: -1.5rem !important;
                    }
                }
            </style>
        </x-slot>

        <div id="content">

            <div class="content-admin-main">
                <section class="invoice-preview-wrapper">
                    <div class="row invoice-preview">
                        <!-- Invoice -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div id="invoice-preview-card" class="card invoice-preview-card">
                                <div class="card-body invoice-padding pb-0">
                                    <!-- Header starts -->
                                    <div
                                        class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                        <div>
                                            <div class="logo-wrapper">
                                                <img src="{{ asset('images/logo/logo.png') }}" alt="logo"
                                                    height="50" width="50" />
                                                <h3 class="text-primary invoice-logo">Obillia</h3>
                                            </div>
                                            <p class="card-text mb-25">Office 149, 450 South Brand Brooklyn</p>
                                            <p class="card-text mb-25">San Diego County, CA 91905, USA</p>
                                            <p class="card-text mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                                        </div>
                                        <div class="mt-md-0 mt-2">
                                            <h4 class="invoice-title">
                                                Invoice
                                                <span class="invoice-number">#3492</span>
                                            </h4>
                                            <div class="invoice-date-wrapper">
                                                <p class="invoice-date-title">Date Issued:</p>
                                                <p class="invoice-date">25/08/2020</p>
                                            </div>
                                            <div class="invoice-date-wrapper">
                                                <p class="invoice-date-title">Due Date:</p>
                                                <p class="invoice-date">29/08/2020</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Header ends -->
                                </div>

                                <hr class="invoice-spacing" />

                                <!-- Address and Contact starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row invoice-spacing">
                                        <div class="col-xl-8 p-0">
                                            <h6 class="mb-4">Invoice To:</h6>
                                            <h6 class="mb-25">Thomas shelby</h6>
                                            <p class="card-text mb-25">Shelby Company Limited</p>
                                            <p class="card-text mb-25">Small Heath, B10 0HF, UK</p>
                                            <p class="card-text mb-25">718-986-6062</p>
                                            <p class="card-text mb-0">peakyFBlinders@gmail.com</p>
                                        </div>
                                        <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                            <h6 class="mb-4">Payment Details:</h6>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="pe-1">Total Due:</td>
                                                        <td><span class="fw-bold">$12,110.55</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">Bank name:</td>
                                                        <td>American Bank</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">Country:</td>
                                                        <td>United States</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">IBAN:</td>
                                                        <td>ETD95476213875085</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">SWIFT code:</td>
                                                        <td>BR91905</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Address and Contact ends -->

                                <!-- Invoice Description starts -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="py-1">Task description</th>
                                                <th class="py-1">Rate</th>
                                                <th class="py-1">Hours</th>
                                                <th class="py-1">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1">
                                                    <p class="card-text fw-bold mb-25">Native App Development</p>
                                                    <p class="card-text text-nowrap">
                                                        Developed a full stack native app using React Native.
                                                    </p>
                                                </td>
                                                <td class="py-1">
                                                    <span class="fw-bold">$60.00</span>
                                                </td>
                                                <td class="py-1">
                                                    <span class="fw-bold">30</span>
                                                </td>
                                                <td class="py-1">
                                                    <span class="fw-bold">$1,800.00</span>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="py-1">
                                                    <p class="card-text fw-bold mb-25">Ui Kit Design</p>
                                                    <p class="card-text text-nowrap">Designed a UI kit for native app
                                                        using Sketch.</p>
                                                </td>
                                                <td class="py-1">
                                                    <span class="fw-bold">$60.00</span>
                                                </td>
                                                <td class="py-1">
                                                    <span class="fw-bold">20</span>
                                                </td>
                                                <td class="py-1">
                                                    <span class="fw-bold">$1200.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="card-body invoice-padding pb-0">
                                    <div class="row invoice-sales-total-wrapper">
                                        <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                            {{-- <p class="card-text mb-0">
                                                <span class="fw-bold">Salesperson:</span> <span class="ms-75">Alfie
                                                    Solomons</span>
                                            </p> --}}
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                                            <div class="invoice-total-wrapper">
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title">Subtotal:</p>
                                                    <p class="invoice-total-amount">$1800</p>
                                                </div>
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title">Discount:</p>
                                                    <p class="invoice-total-amount">$28</p>
                                                </div>
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title">Tax:</p>
                                                    <p class="invoice-total-amount">21%</p>
                                                </div>
                                                <hr class="my-50" />
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title">Total:</p>
                                                    <p class="invoice-total-amount">$1690</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invoice Description ends -->

                                <hr class="invoice-spacing" />

                                <!-- Invoice Note starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="fw-bold">Note:</span>
                                            <span>It was a pleasure working with you and your team. We hope you will
                                                keep us in mind for future freelance
                                                projects. Thank You!</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invoice Note ends -->
                            </div>
                        </div>
                        <!-- /Invoice -->

                        <!-- Invoice Actions -->
                        <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-primary w-100 mb-75">
                                        Download
                                    </button>

                                    <button id="print-invoice" class="btn btn-outline-secondary w-100 mb-75"> Print
                                    </button>


                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Actions -->
                    </div>
                </section>

            </div>
        </div>


        <x-slot name="scripts">

            <script>
                $('#print-invoice').click(function(e) {
                    e.preventDefault();
                    window.print();
                });
            </script>
        </x-slot>


</x-dashboard.layout>
