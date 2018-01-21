<?php

namespace App\Http\Controllers\App;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    
    const POST_VIEW = 'app.entities.posts.';
    const CATEGORIE_VIEW = 'app.entities.categories.';
    const PATH_CONTROLLER = 'App\BlogController@';
    
    
    public function index()
    {
        $posts = $this->getAllPostConfirm();
        $categories = $this->getAllCategorieConfirm();
        
        return view(self::POST_VIEW . 'index')->with([
            'title'      => 'Home',
            'posts'      => $posts,
            'categories' => $categories
        ]);
    }
    
    public function vote($slug)
    {
        $post = Post::where('slug', $slug)->first();
    
        $post->vote = $post->vote + 1;
        $post->save();
        
        return redirect()->action('App\BlogController@show', $slug = $post->slug);
    }
    
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        
        return view(self::POST_VIEW . 'show')->with([
            'post' => $post
        ]);
    }
}
