<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StaticsController extends Controller
{
    const PATH_VIEW = 'admin.entities.static.';

    public function dashboard()
    {
        if ($this->isAdmin()) {

            return view(self::PATH_VIEW . 'dashboard')->with([
                'title'                 => 'Dashboard'
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
}

