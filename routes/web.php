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


Route::get('/page01', function () {
    return view('loginpage01');
});

Route::get('/page02', function () {
    return view('loginpage02');
});

Route::get('/page03', function () {
    return view('loginpage03');
});

Route::get('/', function () {
    return view('Home');
});

Route::get('/home2', function () {
    return view('Home02');
});

Route::get('/home3', function () {
    return view('Home03');
});

