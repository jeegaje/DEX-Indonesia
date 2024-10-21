<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/maintenance-input', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('company-profile.homepage');
});

Route::get('/about', function () {
    return view('company-profile.about');
});

Route::get('/product', function () {
    return view('company-profile.product');
});

Route::get('/articles-and-events', function () {
    return view('company-profile.articles-and-events');
});
