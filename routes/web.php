<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentsController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });