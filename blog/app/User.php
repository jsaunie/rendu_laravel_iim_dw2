<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'fk_role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRole()
    {
        return $this->hasOne(Role::class, 'id', 'fk_role');
    }

    public function getPosts(){
        return $this->hasMany(Post::class, 'fk_user','id');
    }
    
    public function getMessage()
    {
        return $this->hasMany(Message::class,'fk_recever_id','id');
    }

}
