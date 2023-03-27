<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function perks()
    {
        return $this->hasMany(PackagePerk::class);
    }





    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    |
    */

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeMonthly($query)
    {
        return $query->where('duration', 28);
    }

    public function scopeYearly($query)
    {
        return $query->where('duration', 365);
    }
}
