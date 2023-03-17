<?php

namespace App\Jobs\Inspector;

use App\Models\RazorpayOrder;
use App\Services\Razorpay\FetchOrderService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PaymentInspector implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $order;
    public function __construct(
        RazorpayOrder   $order
    ) {
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        \Log::info('before service');
        $service = new FetchOrderService($this->order);
        $service->fetch();
        \Log::info('Payment Inspector');
        // activity()
        //     ->causedBy('Payment Inspector')
        //     ->performedOn($this->order)
        //     ->log([
        //         'res' => $res,
        //     ]);
        return;
    }
}
