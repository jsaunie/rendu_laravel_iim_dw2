<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class StaticsController extends Controller
{
    const PATH_VIEW = 'admin.entities.static.';

    use CountTrait;

    public function dashboard()
    {
        if ($this->isAdmin()) {
            //COUNT
            $countUsers = $this->countMember();
            $countUserConfirm = $this->countMemberConfirm();
            $countPosts = $this->countPost();
            $countPostsConfirm = $this->countPostConfirm();
            $countCategories = $this->countCategories();
            $countCategoriesConfirm = $this->countCategoriesConfirm();
            $countTotal = $countPostsConfirm + $countUserConfirm + $countCategoriesConfirm;

            //DATA
            $users = $this->getAllMember();
            $posts = $this->getALlPost();
            $categories = $this->getAllCategory();

            return view(self::PATH_VIEW . 'dashboard')->with([
                'title' => 'Dashboard',
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

    public function isAdmin()
    {
        if (Auth::user()->getRole->role != 'Admin') {
            return false;
        } else {
            return true;
        }
    }

    public function getAllMember()
    {
        $users = User::orderBy('id', 'desc')->paginate(6);
        return $users;
    }

    public function confirmPost($slug)
    {
        Post::where('slug', $slug)->update([
            'is_confirm' => 1
        ]);
        return redirect()->back();
    }

}

