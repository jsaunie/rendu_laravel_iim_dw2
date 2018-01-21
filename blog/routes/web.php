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

Route::group(['prefix' => 'blog'], function() {
    Route::get('/', ['uses' => 'App\BlogController@index']);
    Route::get('/{slug}', ['uses' => 'App\BlogController@show']);
    
    //comment
    Route::group(['prefix' => 'comment'], function (){
        Route::post('/create', ['uses' => 'App\CommentController@store']);
        Route::post('/delete', ['uses' => 'App\CommentController@delete']);
    });
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', ['uses' => 'Admin\StaticsController@dashboard']);
});
