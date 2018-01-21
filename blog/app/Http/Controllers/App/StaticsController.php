<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class StaticsController extends Controller
{
    const PATH_VIEW = 'app.entities.static.';
    const POST_VIEW = 'app.entities.static.posts.';
    const PATH_ACCOUNT = 'app.entities.static.account.';
    const CATEGORIE_VIEW = 'app.entities.static.categories.';
    const PATH_CONTROLLER = 'App\StaticsController@';
    const COMMENT_VIEW = 'app.entities.static.comments.';

    public function index()
    {
        return view(self::PATH_VIEW . 'index')->with([
            'title' => 'Home'
        ]);
    }

}
