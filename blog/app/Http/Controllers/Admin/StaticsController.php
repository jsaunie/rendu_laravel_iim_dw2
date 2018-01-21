<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

            //DATA
            $users = $this->getAllMember();

            return view(self::PATH_VIEW . 'dashboard')->with([
                'title'                 => 'Dashboard',
                'users'                 => $users,
                'countUsers'            => $countUsers,
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

}

