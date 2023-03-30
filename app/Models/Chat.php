<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function participants()
    {
        return $this->hasMany(ChatParticipant::class);
    }

    public function participant()
    {
        return $this->hasOne(ChatParticipant::class)
            ->where('user_id', '!=', auth()->id());
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }


    public function messages()
    {
        return $this->hasMany(Message::class);
    }


    public function usages()
    {
        return $this->morphMany(Usage::class, 'usageable');
    }






    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }


    public function scopeForJob($query)
    {
        return $query->where('job_id', '!=', null);
    }

    public function scopeForWorkspace($query)
    {
        return $query->where('workspace_id', '!=', null);
    }

    public function scopeGlobal($query)
    {
        return $query->where('job_id', null)->where('workspace_id', null);
    }
}
