<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;

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


Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::get('/logout',[LogoutController::class,'store'])->name('logout');


Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/',[PostController::class,'index'])->name('home');
Route::get('/posts/create',[PostController::class,'create'])->name('post.create');
Route::get('/posts/{post}',[PostController::class,'show'])->name('post.show');
Route::post('/posts',[PostController::class,'store'])->name('post.store');
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('post.edit');
Route::patch('/posts/{post}/update',[PostController::class,'update'])->name('post.update');
Route::delete('/posts/{post}/delete',[PostController::class,'destroy'])->name('post.delete');



Route::get('/users/{user}/myposts',[UserController::class,'myposts'])->name('user.posts');

Route::get('/users/{user}/profile',[UserController::class,'profile'])->name('user.profile');
Route::patch('/users/{user}/profile/update',[UserController::class,'profileUpdate'])->name('user.profile.update');














