<?php

use App\Http\Controllers\pruebaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba', [pruebaController::class,'index'])->name('');
