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
        
        return redirect()->action('App\BlogController@show', $slug = $post->slug);
        dd($request);
    }
    
    public function edit($id)
    {
        $comment = Comment::where('id', $id)->first();
        
        return view('app.entities.comments.edit')->with([
            'comment' => $comment
        ]);
    }
    
    
    public function postUpdateComment(Request $request, $id)
    {
        $comment = Comment::where('id', $id)->first();
        
        $comment->update([
            'content' => $request->comment
        ]);
        
        return redirect()->action('App\BlogController@show', $slug = $comment->getPost->slug);
    }
    
    public function delete(Request $request)
    {
        $comment = Comment::where('id', $request->commentId)->first();
        
        $comment->delete();
        
        $post = Post::where('id', $request->postId)->first();
        
        return redirect()->action('App\BlogController@show', $slug = $post->slug);
    }
}
