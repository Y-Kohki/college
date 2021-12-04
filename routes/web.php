<?php

use Illuminate\Support\Facades\Route;
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

 dev_basis06
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::delete('/posts/{post}', 'PostController@delete');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::post('/posts', 'PostController@store');
=======
 dev_basis05
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::post('/posts', 'PostController@store');
=======
 dev_basis04
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');
=======
 dev_basis03
Route::get('/', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
=======
 dev_basis02
Route::get('/', 'PostController@index');
=======
Route::get('/posts', 'PostController@index');
 master
 master
 master
 master
 master
