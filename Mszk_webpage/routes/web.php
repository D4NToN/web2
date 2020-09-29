<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/new_post', function () {
    return view('new_post');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/register', function () {
    return view('register');
});
