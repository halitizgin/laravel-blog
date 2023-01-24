<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordConfirmController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/post/{id}', [PostController::class, 'index'])->name('post');

Route::get('/user/{id}', [UserController::class, 'index'])->name('user');

Route::get('/category/{slug}', [CategoryController::class, 'index'])->name('category');

Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');

    Route::post('/register', [RegisterController::class, 'register'])->name('register.auth');
});

Route::middleware(['auth', 'auth.session'])->group(function(){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('/profile/update', [ProfileController::class, 'update_profile'])->middleware(['password.confirm'])->name('profile.update');

    Route::get('/password-confirm', [PasswordConfirmController::class, 'index'])->name('password.confirm');

    Route::post('/password-confirm', [PasswordConfirmController::class, 'confirm'])->middleware(['throttle:6,1'])->name('password.confirm.post');

    Route::post('/profile/password/update', [ProfileController::class, 'update_password'])->name('profile.password.update');


    Route::post('/comment/create/{post_id}', [CommentController::class, 'store'])->name('comment.create');
    Route::get('/comment/edit/{id}', [CommentController::class, 'edit'])->name('comment.edit');
    Route::put('/comment/edit/{id}', [CommentController::class, 'update'])->name('comment.update');
});
