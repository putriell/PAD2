<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
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
Route::get('/contact', function () {
    return view('Page/contact');
});
Route::get('/detailProfile', function () {
    return view('Page/detailProfile');
});

Route::get('/detailProfile', [ProfileController::class, 'detailProfile']);
Route::get('/product', [ProductController::class, 'show']);
// Route::get('/product/search/{keyword}', [ProductController::class, 'search']) -> name('product.search');

Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', [AuthController::class, 'register']) -> name('register');
    Route::post('/register', [AuthController::class, 'registerPost']) -> name('register');
    Route::get('/login', [AuthController::class, 'login']) -> name('login');
    Route::post('/login', [AuthController::class, 'loginPost']) -> name('login');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/profile', [ProfileController::class, 'index'])-> name('profile');
    Route::get('/admin', [ProfileController::class, 'adm'])-> name('admin');
    Route::delete('/logout', [AuthController::class, 'logout']) -> name('logout');
    

    Route::post('/profile',[ProductController::class, 'store']) -> name('product.store');
    Route::post('/profile/delete/{id}',[ProductController::class, 'destroy']) -> name('product.destroy');
    Route::post('/profile/edit/{id}',[ProductController::class, 'update']) -> name('product.edit');
});

Route::controller(GoogleController::class) -> group(function(){
    Route::get('auth/google', 'redirectToGoogle') -> name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
