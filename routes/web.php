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

Route::get('/', 'PostController@index');

Route::get('/test', function(){
    \App\Post::create([
        'title' => 'Second Post',
        'body' => 'Hello world',
        'user_id' => 1,
        'publish_date' => \Carbon\Carbon::now()
    ]);

    return 'It worked!';
});

Route::get('/post/create', 'PostController@create')->middleware('auth');
Route::post('/post/create', 'PostController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');
