<?php

namespace App\Http\Controllers;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/list', [StudentController::class, 'index']) -> name('student.index');
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/create', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{id}', [StudentController::class, 'show'])->name('student.show');

