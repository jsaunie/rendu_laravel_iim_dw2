<?php

namespace App\Http\Controllers\App;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    const POST_VIEW = 'app.entities.posts.';
    const CATEGORIE_VIEW = 'app.entities.categories.';
    const PATH_CONTROLLER = 'App\BlogController@';
    
    
    public function index()
    {
        $postOfUser = $this->getPostNotConfirm();
        $posts = $this->getAllPostConfirm();
        $categories = $this->getAllCategoryConfirm();
        
        return view(self::POST_VIEW . 'index')->with([
            'title'      => 'Home',
            'posts'      => $posts,
            'categories' => $categories,
            'postOfUser' => $postOfUser
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
    
    public function create()
    {
        $categories = Category::where('is_confirm', '>', '0')->orderBy('id', 'desc')->get();
        return view(self::POST_VIEW . 'create')->with([
            'categories' => $categories
        ]);
    }
    
    public function post(Request $request)
    {
    
        $categorie = $request->categorie[0];
    
        $request->validate([
            'title' => 'required|string',
            'categorie' => 'required',
            'content' => 'required',
        ]);
    
    
        if ($request->hasFile('file') === true) {
            if ($request->file('file')->isValid() === true) {
                $filename = $request->file->getClientOriginalName();
                $filesize = $request->file->getClientSize();
                $request->file->storeAs('', $filename);
                $path = $request->file->storeAs('', $filename);
                
                Post::create([
                    'title' => $request->get('title'),
                    'slug' => str_slug($request->get('title')),
                    'content' => $request->get('content'),
                    'vote'      => 0,
                    'url_img' => $path,
                    'is_confirm' => 0,
                    'fk_user' => Auth::user()->id,
                    'fk_category' => $categorie,
                ]);
    
                return redirect()->action(self::PATH_CONTROLLER . 'index');
            }
        }else{
            Post::create([
                'title' => $request->get('title'),
                'slug' => str_slug($request->get('title')),
                'content' => $request->get('content'),
                'vote'      => 0,
                'url_img' => '750x300',
                'is_confirm' => 0,
                'fk_user' => Auth::user()->id,
                'fk_category' => $categorie,
            ]);
    
            return redirect()-> action(self::PATH_CONTROLLER . 'index');
        }
    }
    
    public function showUpdateForm($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::all();
        return view(self::POST_VIEW . 'update')->with([
            'post' => $post,
            'categories' => $categories
        ]);
    }
    
    public function postUpdate(Request $request, $slug)
    {
        
        $categories = $request->categorie[0];
    
        $post = Post::where('slug', $slug)->first();
    
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->content = $request->get('content');
        $post->fk_category = $categories;
        
        $post->save();
        
        return redirect()->action('App\BlogController@show', $slug = $post->slug);
    }
    
    public function delete(Request $request)
    {
        
        $post = Post::where('id', $request->postId)->first();
        
        $post->delete();
        return redirect()->action('App\BlogController@index');
    }
}
