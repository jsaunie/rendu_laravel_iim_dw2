<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    
    /**
     * @return mixed
     */
    public function getALlPost()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return $posts;
    }
    
    /**
     * @return mixed
     */
    public function getAllPostConfirm()
    {
        $posts = Post::where('is_confirm', '>', '0')->orderBy('id', 'desc')->paginate(6);
        return $posts;
    }
    
    /**
     * @return mixed
     */
    public function getAllCategory()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(6);
        return $categories;
    }
    
    /**
     * @return mixed
     */
    public function getAllCategoryConfirm()
    {
        $categories = Category::where('is_confirm', '>', '0')->orderBy('id', 'desc')->Paginate(6);
        return $categories;
    }
    
    public function getPostNotConfirm()
    {
        if(Auth::user()){
            $post = Post::where([
                ['fk_user', Auth::user()->id],
                ['is_confirm', '=', '0']
            ])->get();
        } else {
            $post = null;
        }
            return $post;
    }
}
