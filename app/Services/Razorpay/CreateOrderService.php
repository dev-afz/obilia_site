<?php

namespace App\Services\Razorpay;

use App\Jobs\Inspector\PaymentInspector;
use App\Models\RazorpayOrder;
use App\Models\User;
use Razorpay\Api\Api;




class CreateOrderService
{
    public $rzPay;
    public $mode;
    public function __construct($mode = 'LIVE')
    {
        $this->mode = $mode;
        $key = env('RAZORPAY_' . $this->mode . '_KEY');
        $secret = env('RAZORPAY_' . $this->mode . '_SECRET');
        $this->rzPay = new Api($key, $secret);
    }


    public function createOrder(
        string $for,
        array $data,
        float $amount,
        User $user,
        string $currency = 'INR',
        int $discount = 0,
    ) {

        $orderData = [
            'receipt' => 'obl-' . $for . '-' . uniqid(),
            'amount' => $amount * 100,
            'currency' => $currency,
            'payment_capture' => 1,
            'notes' => $data,
        ];


        $rzOrder = $this->rzPay->order->create($orderData)->toArray();

        $order = RazorpayOrder::create([
            'order_id' => $rzOrder['id'],
            'amount' => $rzOrder['amount'] / 100,
            'currency' => $rzOrder['currency'],
            'for' => $for,
            'for_data' => json_encode($data),
            'payment_mode' => $this->mode,
            'user_id' => $user->id,
        ]);

        dispatch(new PaymentInspector($order))->delay(now()->addMinutes(1));

        return $order;
    }
}
