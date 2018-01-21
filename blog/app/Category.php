<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    protected $guarded = [];

    public function getPost()
    {
        return $this->hasMany(Post::class, 'fk_category', 'id');
    }
}
