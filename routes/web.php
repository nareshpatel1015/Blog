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
    return view('post.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homes', 'HomeController@getPosts')->name('post.getPosts');
Route::get('/author/post', 'HomeController@getPostForm')->name('post.form');
Route::post('/author/post', 'HomeController@createPost')->name('post.form');