<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    
    protected $guarded = [];
    
    public function getPost()
    {
        return $this->belongsTo(Post::class, 'fk_post_id','id');
    }
    public function getAuthor()
    {
        return $this->belongsTo(User::class, 'fk_user_id', 'id');
    }
}
