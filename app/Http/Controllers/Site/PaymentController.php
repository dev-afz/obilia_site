<?php

namespace App\Http\Controllers\Site;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Razorpay\FetchOrderService;
use App\Services\Razorpay\CreateOrderService;

class PaymentController extends Controller
{
    public function createOrder(Request $request, CreateOrderService $service)
    {
        $request->validate([
            'plan' => 'required|integer',
        ]);

        $user = auth()->user();

        $package = Package::active()->findOrFail($request->plan);


        $order = $service->createOrder(
            for: 'subscription',
            data: $package->toArray(),
            amount: $package->price,
            user: $user,
        );

        return response()->json([
            'order' => $order,
            'user' => $user->only(['id', 'name', 'email']),
        ]);
    }

    public function fetchOrder(Request $request)
    {

        $user = auth()->user();

        $order = $user->razorpay_orders()
            ->where('order_id', $request->razorpay_order_id)
            // ->pending()
            ->firstOrFail();

        $service = new FetchOrderService($order);

        $rzOrder = $service->fetch();

        return redirect()->back()->with('success', 'Milestone payment has been successfully completed.');
    }
}
