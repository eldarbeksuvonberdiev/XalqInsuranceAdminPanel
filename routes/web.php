<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('layouts.admin.login');
});

Route::get('/dashboard', function () {
    return view('layouts.admin.dashboard');
});
