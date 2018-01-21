<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $guarded = [];

    public function getAuthor()
    {
        return $this->hasOne(User::class, 'id', 'fk_user');
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id', 'fk_category');
    }
    
    public function getComment(){
        return $this->hasMany(Comment::class,'fk_post_id', 'id');
    }
}
