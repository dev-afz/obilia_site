<?php

namespace App\Http\Controllers\Client;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {


        $user = auth()->user();

        $invoices = $user->paid_invoice()->orderBy('id', 'desc')->get();

        return view('dashboard.client.invoices', compact('invoices'));
    }


    public function generate(
        Request $request,
        $id
    ) {

        $client = auth()->user();




        $invoice = $client->paid_invoice()->where('uuid', $id)
            ->with(['milestone', 'from'])
            ->firstOrFail();




        return view('dashboard.client.print-invoice', compact('invoice'));
    }
}
