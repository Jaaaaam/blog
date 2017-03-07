<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');
Route::get('blog/{blog}/edit', 'BlogController@edit');
Route::get('/blog', 'BlogController@create');

Route::post('/blog', 'BlogController@store');
Route::patch('/blog/{blog}', 'BlogController@update');
Route::get('/blog/{blog}/delete', 'BlogController@destroy');

Route::post('{blog}/comment', 'CommentController@store');

