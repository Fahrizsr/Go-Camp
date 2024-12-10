<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('user.welcome');
});

Route::get('/homepage', function () {
    return view('user.homepage');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/products', function () {
    return view('user.products');
});


//admin
Route::get('/dashboard', function () {
    return view('admind.dashboard');
});
Route::resource('/categories', CategoryController::class);
Route::resource('/products', \App\Http\Controllers\ProductController::class);
