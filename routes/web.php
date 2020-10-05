<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'index'])->name('student');

Route::get('/student/{id}', [StudentController::class, 'show'])->name('show_student');

Route::get('/student/create' , [StudentController::class, 'create'])->name('creat_student');

