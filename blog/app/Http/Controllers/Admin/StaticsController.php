<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class StaticsController extends Controller
{
    const PATH_VIEW = 'admin.entities.static.';

    public function dashboard()
    {
        //dd(Auth::user()->getRole->role != 'admin');
        if ($this->isAdmin()) {

            //COUNT
            $countUsers = $this->countMember();
            $countUserConfirm = $this->countMemberConfirm();
            $countPosts = $this->countPost();
            $countPostsConfirm = $this->countPostConfirm();

            //DATA
            $users = $this->getAllMember();
            $posts = $this->getALlPost();

            return view(self::PATH_VIEW . 'dashboard')->with([
                'title'                 => 'Dashboard',
                'users'                 => $users,
                'posts'                 => $posts,
                'countUsers'            => $countUsers,
                'countUsersConfirm'     => $countUserConfirm,
                'countPosts'            => $countPosts,
                'countPostsConfirm'     => $countPostsConfirm,
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

    public function confirmPost($slug)
    {
        Post::where('slug', $slug)->update([
            'is_confirm' => 1
        ]);
        return redirect()->back();
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
}

