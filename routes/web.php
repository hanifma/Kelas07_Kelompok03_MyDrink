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


Route::get('/', function () {
    return view('landingpage');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/pemesanan', function () {
    return view('pemesanan.form');
});

Route::get('/checkout', function () {
    return view('pemesanan.checkout');
});

Route::get('/profil', function () {
    return view('profil.profil');
});

Route::get('/cart', function () {
    return view('pemesanan.cart');
});


