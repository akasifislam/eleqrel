<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/alu', 'HomeController@userInfo');


Route::resource('product', 'ProductController');
Route::resource('post', 'PostController');
Route::resource('video', 'VideoController');
Route::get('/comment/{id}', 'VideoController@createComment')->name('create.comment');
Route::post('/comment-store', 'VideoController@createStore')->name('comment.store');
