<?php

use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\Auth\AuthController;

Route::middleware([AuthCheck::class])->group(function (){
// View all data
Route::get('/', [StudentsController::class, 'index'])->name('student.viewAll');;

// CRUDE
Route::post('/create-new', [StudentsController::class, 'createNewSTD'])->name('student.create');
Route::put('/update/{id}', [StudentsController::class, 'updateSTD'])->name('student.update');
Route::delete('/delete/{id}', [StudentsController::class, 'deleteSTD'])->name('student.delete');
});

// Authorization
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/user-login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'indexRegister'])->name('auth.register');
Route::post('/user-register', [AuthController::class, 'userRegister'])->name('auth.userRegister');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
