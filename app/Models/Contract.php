<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function milestones()
    {
        return $this->hasMany(ContractMilestone::class);
    }

    public function milestone_requests()
    {
        return $this->hasMany(NewMilestoneRequest::class);
    }


    public function workspaces()
    {
        return $this->hasMany(Workspace::class, 'contract_id');
    }



    public function provider()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
