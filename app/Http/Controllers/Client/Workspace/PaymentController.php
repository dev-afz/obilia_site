<?php

namespace App\Http\Controllers\Client\Workspace;

use App\Http\Controllers\Controller;
use App\Services\Razorpay\CreateOrderService;
use App\Services\Razorpay\FetchOrderService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{


    public function createOrder(Request $request, CreateOrderService $service)
    {
        $request->validate([
            'milestone_id' => 'required|integer',
        ]);

        $user = auth()->user();

        $milestone = $user->client_milestones()->findOrFail($request->milestone_id);


        $order = $service->createOrder(
            for: 'milestone',
            data: $milestone->toArray(),
            amount: $milestone->cost,
            sgst: 9,
            cgst: 9,
            user: $user,
        );

        return response()->json([
            'order' => $order,
        ]);
    }


    public function fetch(Request $request)
    {


        $user = auth()->user();

        $order = $user->razorpay_orders()
            ->where('order_id', $request->razorpay_order_id)
            // ->pending()
            ->firstOrFail();

        $service = new FetchOrderService($order);

        $rzOrder = $service->fetch($order);

        return redirect()->back()->with('success', 'Subscription payment has been successfully completed.');
    }
}
