<?php

namespace App\Services\Razorpay;

use Razorpay\Api\Api;
use App\Models\RazorpayOrder;
use App\Models\ContractMilestone;
use Illuminate\Support\Facades\DB;


class FetchOrderService
{

    /**
     * @var RazorpayOrder
     * @var Api
     * @var User
     * @var string
     *
     */

    public $order;
    public $rzPay;
    public $user;
    public $mode;

    /**
     * UserRazorpayOrderFetchService constructor.
     * @param RazorpayOrder $order
     *
     */

    public function __construct(RazorpayOrder $order)
    {
        $this->order = $order;
        $this->user = $order->user;
        $this->mode = strtoupper($order->payment_mode);

        $key = env('RAZORPAY_' . $this->mode . '_KEY');
        $secret = env('RAZORPAY_' . $this->mode . '_SECRET');
        $this->rzPay = new Api($key, $secret);
    }

    public function fetch()
    {
        $rzOrder = $this->rzPay->order->fetch($this->order->order_id)->toArray();


        DB::beginTransaction();


        if ($rzOrder['status'] == 'paid') {
            $this->order->status = 'paid';
            $this->order->save();
            $this->processOrder($this->order);
        } else if ($rzOrder['status'] == 'failed') {
            $this->order->status = 'failed';
            $this->order->save();
        }



        DB::commit();
        return $rzOrder;
    }




    private function processOrder(RazorpayOrder $order)
    {
        switch ($order->for) {
            case 'milestone':
                $milestone = ContractMilestone::find(json_decode($order->for_data, true)['id']);
                $this->addFund($milestone, $order);
                break;

            default:
                throw new \Exception('Invalid order type (for)');
                break;
        }
    }














    /*
    |--------------------------------------------------------------------------
    | Processors for different types of orders
    |--------------------------------------------------------------------------
    |
    | These methods are used to process the order after it has been paid
    | For example, if the order is for a milestone, then the milestone
    | will be marked as funded
    |
    */

    private function addFund(ContractMilestone $milestone, RazorpayOrder $order)
    {
        $milestone->escrow_fund_added_time = now();
        $milestone->razorpay_order_id = $order->id;
        $milestone->save();

        return $milestone;
    }
}
