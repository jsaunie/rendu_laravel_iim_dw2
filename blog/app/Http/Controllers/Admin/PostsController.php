<?php
/**
 * Created by PhpStorm.
 * User: Alpha
 * Date: 21/01/2018
 * Time: 19:48
 */

namespace App\Http\Controllers\Admin;


class PostsController extends StaticsController
{

    public function index()
    {
        if ($this->isAdmin()) {
            //COUNT
            $countUsers = $this->countMember();
            $countUserConfirm = $this->countMemberConfirm();
            $countPosts = $this->countPost();
            $countPostsConfirm = $this->countPostConfirm();
            $countCategories = $this->countCategories();
            $countCategoriesConfirm = $this->countCategoriesConfirm();
            $countTotal = $countPosts + $countUsers + $countCategories;

            //DATA
            $users = $this->getAllMember();
            $posts = $this->getALlPost();
            $categories = $this->getAllCategorie();

            return view(self::PATH_VIEW . 'dashboard')->with([
                'title' => 'Posts',
                'users' => $users,
                'posts' => $posts,
                'categories' => $categories,
                'countUsers' => $countUsers,
                'countUsersConfirm' => $countUserConfirm,
                'countPosts' => $countPosts,
                'countPostsConfirm' => $countPostsConfirm,
                'countCategories' => $countCategories,
                'countCategoriesConfirm' => $countCategoriesConfirm,
                'countTotal' => $countTotal
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function add()
    {
        
    }

    public function edit()
    {
        
    }

    public function delete()
    {
        
    }
    
}