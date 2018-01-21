<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
