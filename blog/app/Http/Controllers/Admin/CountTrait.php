<?php
/**
 * Created by PhpStorm.
 * User: Alpha
 * Date: 21/01/2018
 * Time: 19:27
 */

namespace App\Http\Controllers\Admin;


use App\Category;
use App\Post;
use App\User;

trait CountTrait
{

    public function countMember()
    {
        $users = User::all()->count();
        return $users;
    }

    public function countMemberConfirm()
    {
        $users = User::where('fk_role', '>', '1')->get()->count();
        return $users;
    }

    public function countPost()
    {
        $posts = Post::all()->count();
        return $posts;
    }

    public function countPostConfirm()
    {
        $posts = Post::where('is_confirm', '>', '0')->get()->count();
        return $posts;
    }

    public function countCategories()
    {
        $categories = Category::all()->count();
        return $categories;
    }

    public function countCategoriesConfirm()
    {
        $categories = Category::where('is_confirm', '>', '0')->get()->count();
        return $categories;
    }
}