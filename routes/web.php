<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentController;
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
    return view('home');
});
Route::get('/posts',[PostsController::class,'index']);
Route::get('/posts/create',[PostsController::class,'create']);
Route::post('/posts',[PostsController::class,'store']);
Route::get('/posts/{auth_id}',[PostsController::class,'auth_post']);
Route::get('/posts/show/{post}',[PostsController::class,'show']);
Route::get('/posts/edit/{post}',[PostsController::class,'edit']);
Route::put('/posts/{post}',[PostsController::class,'update']);
Route::get('/posts/delete/{post}',[PostsController::class,'delete']);
Route::post('/comment/update/{comment_id}',[CommentController::class,'store']);
Route::post('/comment/add/{post_id}',[CommentController::class,'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
