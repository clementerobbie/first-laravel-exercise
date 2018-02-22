<?php


Route::get('/', 'PostController@index');
    
Route::get('/posts', 'PostController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/create', 'PostController@create');

Route::post('/create', 'PostController@publish');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/post/{post}/comment', 'CommentController@create');


