<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/mycatatan', function () {
    return view('pages.mycatatan');
});
Route::get('/pendaftaran', function () {
    return view('pages.pendaftaran');
});
