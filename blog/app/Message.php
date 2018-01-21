<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    
    protected $guarded = [];
    
    public function getSender()
    {
        return $this->hasOne(User::class,'id', 'fk_sender_id');
    }
    
    public function getRecever()
    {
        return $this->hasOne(User::class,'id', 'fk_recever_id');
    }
}
