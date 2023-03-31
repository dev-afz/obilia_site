<?php

namespace App\Http\Controllers\Client;


use Illuminate\Http\Request;
use App\Models\RazorpayOrder;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Models\Contract;

class InvoiceController extends Controller
{
    public function index()
    {


        $payments = RazorpayOrder::where('user_id', auth()->user()->id)
            ->where('status', 'paid')
            ->where('for', 'milestone')
            ->orderBy('id', 'desc')
            ->get();

        return view('dashboard.client.payments', compact('payments'));
    }


    public function generate(
        Request $request,
        $id
    ) {
        $client = auth()->user();

        $order = $client->razorpay_orders()->where('order_id', $id)->firstOrFail();

        $milestone = json_decode($order->for_data, true);

        $to = Contract::where('id', $milestone['contract_id'])
            ->with(['provider'])
            ->first()->provider;

        $from = $client;


        return view('dashboard.client.print-invoice', compact('order', 'to', 'from', 'milestone'));
    }
}
