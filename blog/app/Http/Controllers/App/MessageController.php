<?php

namespace App\Http\Controllers\App;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    
    public function index()
    {
        $messages = Message::where('fk_recever_id', Auth::user()->id)->get();
        
        return view('app.entities.messages.index')->with([
            'messages' => $messages
        ]);
    }
    public function create()
    {
        $users = User::all();
        return view('app.entities.messages.create')->with([
            'users' => $users
        ]);
    }
    
    public function send(Request $request)
    {
        $recever = $request->user[0];
        
        $message = Message::create([
            'fk_sender_id' => Auth::user()->id,
            'content' => $request->get('content'),
            'fk_recever_id' => $recever
        ]);
        
        return redirect('/');
    }
}
