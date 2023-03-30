<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status',
        'images',
        'image',
        'uuid',
        'phone',
        'gender',
        'state',
        'city',
        'rp_contact',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function chats()
    {
        return $this->hasManyThrough(Chat::class, ChatParticipant::class, 'user_id', 'id', 'id', 'chat_id');
    }


    public function posted_jobs()
    {
        return $this->hasMany(Job::class, 'user_id');
    }


    public function liked_jobs()
    {
        return $this->hasMany(Like::class, 'user_id')->where('likeable_type', Job::class);
    }


    public function job_applications()
    {
        return $this->hasMany(JobApplication::class, 'user_id');
    }


    public function job_invitations()
    {
        return $this->hasMany(JobInvitation::class, 'user_id');
    }


    public function skills()
    {
        return $this->hasMany(UserSkill::class, 'user_id');
    }

    public function direct_skills()
    {
        return $this->hasManyThrough(Skill::class, UserSkill::class, 'user_id', 'id', 'id', 'skill_id');
    }


    public function received_message_contract()
    {
        return $this->hasMany(MessageContract::class, 'send_to');
    }

    public function sent_message_contract()
    {
        return $this->hasMany(MessageContract::class, 'send_by');
    }



    public function provider_contracts()
    {
        return $this->hasMany(Contract::class, 'user_id');
    }

    public function client_contracts()
    {
        return $this->hasMany(Contract::class, 'client_id');
    }

    public function services()
    {
        return $this->hasMany(UserService::class, 'user_id');
    }


    public function kycs()
    {
        return $this->hasMany(UserKyc::class, 'user_id');
    }


    public function business()
    {
        return $this->hasOne(UserBusiness::class, 'user_id');
    }


    public function bank()
    {
        return $this->hasOne(UserBank::class, 'user_id');
    }


    public function provider_workspace()
    {
        return $this->hasMany(Workspace::class, 'user_id');
    }

    public function client_workspace()
    {
        return $this->hasMany(Workspace::class, 'client_id');
    }


    public function client_milestones()
    {
        return $this->hasManyThrough(ContractMilestone::class, Contract::class, 'client_id', 'contract_id', 'id', 'id');
    }


    public function provider_milestones()
    {
        return $this->hasManyThrough(ContractMilestone::class, Contract::class, 'user_id', 'contract_id', 'id', 'id');
    }


    public function razorpay_orders()
    {
        return $this->hasMany(RazorpayOrder::class, 'user_id');
    }




    public function subscriptions()
    {
        return $this->hasMany(UserSubscription::class, 'user_id');
    }

    public function balance()
    {
        return $this->hasOne(PackageBalance::class, 'user_id');
    }


    public function usages()
    {
        return $this->hasMany(Usage::class, 'user_id');
    }

    /*
    |--------------------------------------------------------------------------
    |scopes
    |--------------------------------------------------------------------------
    |
    | scopes are used to filter data
    |
    */


    public function scopeHasLikedJob($job_id)
    {
        return $this->liked_jobs()->where('likeable_id', $job_id)->first();
    }

    public function scopeIsUser($q)
    {
        return $q->where('role', 'service_provider');
    }

    public function scopeIsProvider($q)
    {
        return $q->where('role', 'service_provider');
    }



    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }


    public function scopeIsSubscribed($q)
    {
        return $q->whereHas('subscriptions', function ($q) {
            $q->whereDate('end_date', '>=', now());
        });
    }




    /*
    |--------------------------------------------------------------------------
    |Custom Methods
    |--------------------------------------------------------------------------
    |
    | Custom methods are used to perform some actions
    |
    */

    public function likeJob($likeable)
    {
        $this->liked_jobs()->create([
            'likeable_id' => $likeable,
            'likeable_type' => Job::class
        ]);
    }

    public function unlikeJob($likeable)
    {
        $this->liked_jobs()->where('likeable_id', $likeable)
            ->where('likeable_type', Job::class)
            ->delete();
    }

    public function isUser()
    {
        return $this->role === 'service_provider';
    }

    public function isProvider()
    {
        return $this->role === 'service_provider';
    }

    public function isClient()
    {
        return $this->role === 'client';
    }
}
