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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('common.welcome');
});


// User routes

Route::get('/users', "UserController@list");
Route::get('/users/create', "UserController@create");
Route::get('/users/{userId}', "UserController@show");

Route::post('/add', "UserController@add");

// Post route

Route::get('/posts', "PostController@list");
