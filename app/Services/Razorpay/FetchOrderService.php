<?php

namespace App\Services\Razorpay;

use App\Action\ServiceProvider\ProviderAction;
use Razorpay\Api\Api;
use App\Models\RazorpayOrder;
use App\Models\ContractMilestone;
use Illuminate\Support\Facades\DB;
use App\Jobs\Inspector\PaymentInspector;
use App\Models\Package;

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
        $rzOrder = $this->rzPay->order->fetch($this->order->order_id)->payments()->toArray();
        if ($this->order->status !== 'pending') {
            return 'already processed';
        }


        DB::beginTransaction();

        $all_status = [];
        $is_failed = true;
        foreach ($rzOrder['items'] as $item) {
            $all_status[] = $item['status'];
            if ($item['status'] == 'captured') {
                $this->order->status = 'paid';
                $this->order->transaction_id = $item['id'];
                $this->order->save();
                $this->processOrder($this->order);
                $is_failed = false;
            }
        }


        if (empty($rzOrder['items'])) {
            if ($this->order->created_at->diffInMinutes(now()) < 60) {
                dispatch(new PaymentInspector($this->order))->delay(now()->addMinutes(60));
                $is_failed = false;
            }
        }


        if ($is_failed) {
            $this->order->status = 'failed';
            $this->order->save();
        }
        DB::commit();
        return $this->order->status;
    }




    private function processOrder(RazorpayOrder $order)
    {
        switch ($order->for) {
            case 'milestone':
                $milestone = ContractMilestone::find(json_decode($order->for_data, true)['id']);
                $this->addFund($milestone, $order);
                break;

            case 'subscription':
                $this->addSubscription($order);
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
        $milestone->status = 'active';
        $milestone->save();

        return $milestone;
    }

    private function addSubscription(RazorpayOrder $order)
    {
        $package = json_decode($order->for_data, true);
        $subscription =  $this->user->subscriptions()->create([
            'razorpay_order_id' => $order->id,
            'package_id' => $package['id'],
            'package_details' => $order->for_data,
            'start_date' => now(),
            'end_date' => now()->addDays($package['duration']),
            'status' => 'running',
        ]);
        $this->user->subscription_status = 'subscribed';
        $this->user->save();

        $package = Package::find($package['id']);
        $action = new ProviderAction($this->user);
        $action->rechargeBalance($package);

        return $subscription;
    }
}
