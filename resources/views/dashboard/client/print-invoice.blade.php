<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Site Title -->
    <title>
        Obillia - Invoice
    </title>
    <link rel="stylesheet" href="{{ asset(mix('css/invoice.css')) }}" />
</head>

<body>
    <div class="tm_container">
        <div class="tm_invoice_wrap">
            <div class="tm_invoice tm_style1 tm_type1" id="tm_download_section">
                <div class="tm_invoice_in">
                    <div class="tm_invoice_head tm_top_head tm_mb15 tm_align_center">
                        <div class="tm_invoice_left">
                            <div class="tm_logo"><img src="{{ asset('images/logo/logo.png') }}" height="50"
                                    width="50" alt="Logo"></div>
                        </div>
                        <div class="tm_invoice_right tm_text_right tm_mobile_hide">
                            <div class="tm_f50 tm_text_uppercase tm_accent_color">Invoice</div>
                        </div>
                        <div class="tm_shape_bg tm_accent_bg_20 tm_mobile_hide"></div>
                    </div>
                    <div class="tm_invoice_info tm_mb25">
                        <div class="tm_card_note tm_mobile_hide"><b class="tm_primary_color">Payment Method: </b>Online
                        </div>
                        <div class="tm_invoice_info_list tm_accent_color">
                            <p class="tm_invoice_number tm_m0">Invoice No:
                                <b>#OBL{{ Str::padLeft($order->id, 6, '0') }}</b>
                            </p>
                            <p class="tm_invoice_date tm_m0">Date: <b>
                                    {{ $order->created_at->format('d M, Y') }}
                                </b></p>
                        </div>
                        <div class="tm_invoice_seperator tm_accent_bg_20"></div>
                    </div>
                    <div class="tm_invoice_head tm_mb10">
                        <div class="tm_invoice_left">
                            <p class="tm_mb2"><b class="tm_primary_color">Invoice To:</b></p>
                            <p>
                                {{ $from->name }} <br>

                                {{ $from->email }}
                            </p>
                        </div>
                        <div class="tm_invoice_right tm_text_right">
                            <p class="tm_mb2"><b class="tm_primary_color">Pay To:</b></p>
                            <p>
                                {{ $to->name }} <br>
                                {{ $to->email }}<br>
                            </p>
                        </div>
                    </div>
                    <div class="tm_table tm_style1 tm_mb30">
                        <div>
                            <div class="tm_table_responsive">
                                <table>
                                    <thead>
                                        <tr class="tm_accent_bg_20">
                                            <th class="tm_width_2 tm_semi_bold tm_accent_color">No.</th>
                                            <th class="tm_width_5 tm_semi_bold tm_accent_color">Milestone</th>
                                            <th style="text-align:end;" class="tm_width_2 tm_semi_bold tm_accent_color">
                                                Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tm_width_2 tm_border_top_0">1</td>
                                            <td class="tm_width_5 tm_border_top_0">{{ $milestone['title'] }}</td>
                                            <td style="text-align:end;" class="tm_width_2 tm_border_top_0">
                                                ₹{{ $milestone['cost'] }}</td>
                                        </tr>
                                        <tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tm_invoice_footer tm_border_top tm_mb15 tm_m0_md">
                            <div class="tm_left_footer">
                                <p class="tm_mb2"><b class="tm_primary_color">Payment info:</b></p>
                                <p class="tm_m0">Order ID : {{ $order->order_id }} <br>Amount:
                                    ₹{{ $milestone['cost'] }}
                                </p>
                            </div>
                            <div class="tm_right_footer">
                                <table class="tm_mb15">
                                    <tbody>
                                        <tr>
                                            <td class="tm_width_3 tm_primary_color tm_bold">Subtoal</td>
                                            <td class="tm_width_3 tm_primary_color tm_bold tm_text_right">
                                                ₹{{ $milestone['cost'] }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td class="tm_width_3 tm_primary_color">Tax <span
                                                    class="tm_ternary_color">(2%)</span></td>
                                            <td class="tm_width_3 tm_primary_color tm_text_right">$3</td>
                                        </tr> --}}
                                        <tr class="tm_accent_bg_20">
                                            <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_accent_color">Grand
                                                Total </td>
                                            <td
                                                class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_accent_color tm_text_right">
                                                ₹{{ $milestone['cost'] }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <hr class="tm_mb20">
                    <p class="tm_mb0 tm_text_center tm_accent_color">Thank you for choosing obillia 🙂</p>
                </div>
            </div>
            <div class="tm_invoice_btns tm_hide_print">
                <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
                    <span class="tm_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path
                                d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                        </svg>
                    </span>
                    <span class="tm_btn_text">Download</span>
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset(mix('js/jspdf.min.js')) }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        (function($) {
            'use strict';

            $('#tm_download_btn').on('click', function() {
                var downloadSection = $('#tm_download_section');
                var cWidth = downloadSection.width();
                var cHeight = downloadSection.height();
                var topLeftMargin = 0;
                var pdfWidth = cWidth + topLeftMargin * 2;
                var pdfHeight = pdfWidth * 1.5 + topLeftMargin * 2;
                var canvasImageWidth = cWidth;
                var canvasImageHeight = cHeight;
                var totalPDFPages = Math.ceil(cHeight / pdfHeight) - 1;

                html2canvas(downloadSection[0], {
                    allowTaint: true
                }).then(function(
                    canvas
                ) {
                    canvas.getContext('2d');
                    var imgData = canvas.toDataURL('image/png', 1.0);
                    var pdf = new jsPDF('p', 'pt', [pdfWidth, pdfHeight]);
                    pdf.addImage(
                        imgData,
                        'PNG',
                        topLeftMargin,
                        topLeftMargin,
                        canvasImageWidth,
                        canvasImageHeight
                    );
                    for (var i = 1; i <= totalPDFPages; i++) {
                        pdf.addPage(pdfWidth, pdfHeight);
                        pdf.addImage(
                            imgData,
                            'PNG',
                            topLeftMargin,
                            -(pdfHeight * i) + topLeftMargin * 0,
                            canvasImageWidth,
                            canvasImageHeight
                        );
                    }
                    pdf.save('OBL-INV-{{ Str::padLeft($order->id, 6, '0') }}.pdf');
                });
            });

        })(jQuery);
    </script>
</body>

</html>
