<?php
/**
 * Created by PhpStorm.
 * User: Alpha
 * Date: 21/01/2018
 * Time: 19:49
 */

namespace App\Http\Controllers\Admin;


class UsersController extends StaticsController
{
    const PATH_VIEW = 'admin.entities.static.users.';

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
            $categories = $this->getAllCategory();

            return view(self::PATH_VIEW . 'index')->with([
                'title' => 'Users',
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
        $categories = $this->getAllCategory();

        return view(self::PATH_VIEW . 'add')->with([
            'title' => 'Users',
            'users' => $users,
            'posts' => $posts,
            'countUsers' => $countUsers,
            'countUsersConfirm' => $countUserConfirm,
            'countPosts' => $countPosts,
            'countPostsConfirm' => $countPostsConfirm,
            'countCategories' => $countCategories,
            'countCategoriesConfirm' => $countCategoriesConfirm,
            'countTotal' => $countTotal
        ]);

    }

    public function edit($id)
    {
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
        $categories = $this->getAllCategory();

        return view(self::PATH_VIEW . 'add')->with([
            'title' => 'Users',
            'users' => $users,
            'posts' => $posts,
            'countUsers' => $countUsers,
            'countUsersConfirm' => $countUserConfirm,
            'countPosts' => $countPosts,
            'countPostsConfirm' => $countPostsConfirm,
            'countCategories' => $countCategories,
            'countCategoriesConfirm' => $countCategoriesConfirm,
            'countTotal' => $countTotal
        ]);

    }

    public function delete($id)
    {

    }
}