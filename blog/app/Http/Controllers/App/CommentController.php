<?php

namespace App\Http\Controllers\App;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        
        $comment = Comment::create([
            'content' => $request->comment,
            'fk_post_id' => $request->postId,
            'fk_user_id' => Auth::user()->id,
            'created_at' => now(),
        ]);
        
        $post = Post::where('id', $request->postId)->first();
        
        return redirect()->action('App\BlogController@show', $id = $post->slug);
        dd($request);
    }
}
