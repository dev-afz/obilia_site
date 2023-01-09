<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;


    protected $guarded = [];


    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }


    public function media()
    {
        return $this->hasMany(MessageMedia::class);
    }

    public function replied()
    {
        return $this->belongsTo(Message::class, 'replied_to', 'id');
    }
}
