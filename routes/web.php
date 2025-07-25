<?php

use App\Http\Controllers\Auth\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('authenticate', [AuthenticationController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthenticationController::class, 'logout'])->name('logout');
