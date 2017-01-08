<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/upload', 'ImagesController@store');
Route::resource('posts', 'PostsController');

Route::get('/r101', 'RecipeController@r101');
Route::get('/r106', 'RecipeController@r106');

//Recipe 107
Route::get('/blog', 'BlogController@index');