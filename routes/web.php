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
    return view('home');
});

Route::get('/signup', function () {
    return view('Register/signup');
});

Route::get(('/login'), function(){
    return view('Register/login');
});

Route::get(('/footer'), function(){
    return view('footer');
});

Route::get(('/xtralistNU'), function(){
    return view('xtralist');
});
