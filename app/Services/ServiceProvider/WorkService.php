<?php

namespace App\Services\ServiceProvider;

use Str;
use App\Models\User;
use App\Models\MilestoneWork;
use App\Models\RazorpayOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class WorkService
{

    public $work;
    public $client;


    public function __construct(
        int $work_id,
        User $client
    ) {
        $this->work = MilestoneWork::where('id', $work_id)
            ->whereHas('milestone', function ($query) use ($client) {
                $query->whereHas('contract', function ($query) use ($client) {
                    $query->where('client_id', $client->id);
                });
            })
            ->firstOrFail();
        $this->client = $client;
    }


    public function resolve(string $action): string
    {
        switch ($action) {
            case 'approved':
                $this->approveWork();
                break;

            case 'rejected':
                $this->rejectWork();
                break;

            default:
                throw ValidationException::withMessages([
                    'action' => 'Invalid action ,action must be approved or rejected',
                ]);
                break;
        }

        return ($action == 'approved') ? 'approved' : 'rejected';
    }




    public function approveWork()
    {
        DB::beginTransaction();

        $milestone =    $this->work->milestone;
        $provider = $milestone->contract->provider;
        $order = $milestone->razorpay_order;
        $milestone->update([
            'escrow_fund_released_time' => now(),
        ]);
        $this->work->update([
            'status' => 'approved',
        ]);

        $this->generateInvoice(
            title: $milestone->title,
            order: $order,
            provider: $provider,
            client: $this->client,
        );

        DB::commit();
    }


    public function rejectWork()
    {
        $this->work->update([
            'status' => 'rejected',
        ]);
    }







    public function generateInvoice(
        RazorpayOrder $order,
        User $provider,
        User $client,
        string $title
    ): void {

        $amount = json_decode($order->for_data, true)['cost'];

        $client->paid_invoice()->create([
            'uuid' => Str::uuid(),
            'title' => $title,
            'from' => $client->id,
            'to' => $provider->id,
            'razorpay_order_id' => $order->id,
            'amount' => $amount,
            'sgst' => $order->sgst,
            'cgst' => $order->cgst,
            'discount' => $order->discount,
            'final_amount' => $order->amount,
        ]);
    }








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
