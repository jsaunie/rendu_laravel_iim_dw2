<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $guarded = [];

    public function getUser()
    {
        return $this->hasOne(User::class, 'id', 'fk_user');
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id', 'fk_categorie');
    }
}
