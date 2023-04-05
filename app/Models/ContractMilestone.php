<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractMilestone extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function works()
    {
        return $this->hasMany(MilestoneWork::class, 'milestone_id', 'id');
    }


    public function razorpay_order()
    {
        return $this->belongsTo(RazorpayOrder::class, 'razorpay_order_id', 'id');
    }
}
