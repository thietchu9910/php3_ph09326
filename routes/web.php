<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', [StudentController::class, 'index'])->name('student');

Route::get('/student/show/{id}', [StudentController::class, 'show'])->name('show_student');

Route::get('/student/create' , [StudentController::class, 'create'])->name('creat_student');
Route::post('/student/after-create' , [StudentController::class, 'store'])->name('store_student');

Route::get('/sign-in', [AuthController::class, 'index'])->name('sign-in');
Route::get('/post-sign-in', [AuthController::class, 'postSignIn'])->name('post-sign-in');

//dăng kí
Route::get('/sign-up', [AuthController::class,'preSignUp'])->name('sign-up');
Route::get('/post-sign-up', [AuthController::class,'postSignUp'])->name('post-sign-up');


// Route::group(['middleware' => ['check.user', 'auth']], function(){
// //dashboard
// Route::get('dashboard', 'DashboardController')->name('dashboard.index');

// });

Route::get('/comment', [CommentController::class, 'index'])->name('comment');
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
