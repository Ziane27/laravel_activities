<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// View all data
Route::get('/', [StudentsController::class, 'index']);

// Create/Add new data
Route::post('/create-new', [StudentsController::class, 'createNewSTD'])->name('student.create');