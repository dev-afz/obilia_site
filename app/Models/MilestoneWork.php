<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilestoneWork extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function milestone()
    {
        return $this->belongsTo(ContractMilestone::class, 'milestone_id');
    }
}
