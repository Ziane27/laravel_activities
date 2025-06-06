<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// View all data
Route::get('/', [StudentsController::class, 'index'])->name('student.viewAll');;

// CRUDE
Route::post('/create-new', [StudentsController::class, 'createNewSTD'])->name('student.create');
Route::put('/update/{id}', [StudentsController::class, 'updateSTD'])->name('student.update');
Route::delete('/delete/{id}', [StudentsController::class, 'deleteSTD'])->name('student.delete');