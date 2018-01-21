<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->action('App\BlogController@index');
});

Route::get('/logout', ['uses' => 'App\AuthController@logout']);

Auth::routes();

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', ['uses' => 'App\BlogController@index']);
    Route::get('/show{slug}', ['uses' => 'App\BlogController@show']);
    Route::get('/{slug}/vote', ['uses' => 'App\BlogController@vote']);
    Route::get('/create', ['uses' => 'App\BlogController@create']);
    Route::post('/create', ['uses' => 'App\BlogController@post']);
    //comment
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/{id}', ['uses' => 'App\CommentController@edit']);
        Route::post('/update/{id}', ['uses' => 'App\CommentController@postUpdateComment']);
        Route::post('/create', ['uses' => 'App\CommentController@store']);
        Route::post('/delete', ['uses' => 'App\CommentController@delete']);
    });
});

Route::group(['prefix' => 'account'], function () {
    Route::get('/confirm', ['uses' => 'App\AuthController@confirm']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', ['uses' => 'Admin\StaticsController@dashboard']);
    Route::get('/post/confirm/{slug}', ['uses' => 'Admin\StaticsController@confirmPost']);
    // Admin : Posts
    Route::get('/posts', ['uses' => 'Admin\PostsController@index']);
    // Admin : Users
    Route::get('/users', ['uses' => 'Admin\UsersController@index']);
    // Admin : categories
    Route::get('/categories', ['uses' => 'Admin\CategoriesController@index']);
});
