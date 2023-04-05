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
        float|int $sgst = 0,
        float|int $cgst = 0,
        User $user,
        string $currency = 'INR',
        int $discount = 0,
        array $discount_details = []
    ) {


        $payable_amount = $this->calculatePayableAmount(
            amount: $amount,
            sgst: $sgst,
            cgst: $cgst,
            discount: $discount,
        );

        $orderData = [
            'receipt' => 'obl-' . $for . '-' . uniqid(),
            'amount' => $payable_amount * 100,
            'currency' => $currency,
            'payment_capture' => 1,
            'notes' => $data,
        ];


        $rzOrder = $this->rzPay->order->create($orderData)->toArray();

        $order = RazorpayOrder::create([
            'order_id' => $rzOrder['id'],
            'amount' => $rzOrder['amount'] / 100,
            'sgst' => $sgst,
            'cgst' => $cgst,
            'currency' => $rzOrder['currency'],
            'for' => $for,
            'for_data' => json_encode($data),
            'payment_mode' => $this->mode,
            'user_id' => $user->id,
            'discount' => $discount,
            'discount_details' => json_encode($discount_details),
        ]);

        dispatch(new PaymentInspector($order))->delay(now()->addMinutes(1));

        return $order;
    }
























    /*
    |--------------------------------------------------------------------------
    | Helper Methods
    |--------------------------------------------------------------------------
    |
    |
    */



    public function calculatePayableAmount(
        float $amount,
        float|int $sgst,
        float|int $cgst,
        int $discount,
    ): int|float {
        $payable_amount = $amount;

        $payable_sgst = ($payable_amount * $sgst) / 100;
        $payable_cgst = ($payable_amount * $cgst) / 100;

        $discount_amount = ($payable_amount * $discount) / 100;

        $payable_amount = ($payable_amount + $payable_sgst + $payable_cgst) - $discount_amount;

        return $payable_amount;
    }
}
