<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('pages-main');
Route::post('/submit-data', [MainController::class, 'submitData']);

// Route::get('/', function () {
//     return view('welcome');
// });
