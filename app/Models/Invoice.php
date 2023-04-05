<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function from()
    {
        return $this->belongsTo(User::class, 'from_id');
    }

    public function to()
    {
        return $this->belongsTo(User::class, 'to_id');
    }


    public function order()
    {
        return $this->belongsTo(RazorpayOrder::class, 'razorpay_order_id');
    }


    public function milestone()
    {
        return $this->hasOneThrough(ContractMilestone::class, RazorpayOrder::class, 'id', 'razorpay_order_id', 'razorpay_order_id', 'id');
    }







    public function scopeUnpaid($query)
    {
        return $query->where('paid_to_provider', false);
    }

    public function scopePaid($query)
    {
        return $query->where('paid_to_provider', true);
    }
}
