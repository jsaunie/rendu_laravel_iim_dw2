<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function create()
    {
        return view('app.entities.messages.create')->with([
        
        ]);
    }
}
