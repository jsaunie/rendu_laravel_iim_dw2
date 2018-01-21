<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
    
    public function confirm()
    {
        Auth::user()->fk_role = 2;
        Auth::user()->save();
        
        return redirect()->back();
    }
}
