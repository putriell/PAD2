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

Route::get('/', function () {
    return view('Page/home');
});
Route::get('/home', function () {
    return view('Page/home');
});
Route::get('/product', function () {
    return view('Page/product');
});
Route::get('/contact', function () {
    return view('Page/contact');
});
Route::get('/profile', function () {
    return view('Page/profile');
});
Route::get('/profile/add-produk', function () {
    return view('Page/profile');
});
Route::get('/login', function () {
    return view('Page/login');
});
Route::get('/register', function () {
    return view('Page/register');
});


