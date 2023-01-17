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


    public function workspaces()
    {
        return $this->hasMany(Workspace::class, 'contract_id');
    }
}
