<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
>>>>>>> 8c63de5 (Penambahan MVC)
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

<<<<<<< HEAD

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
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/check', function(){
    if (Auth::user()->role == 'admin') {
        return redirect('/home');
    }else{
        return redirect('/');
    }
});

Auth::routes();

Route::resource('profile', SettingController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('product', ProductController::class);
Route::resource('transaction', TransactionController::class);
Route::post('/transaction/validasi/{id}', [TransactionController::class, 'validasi'])->name('transaction.validasi');
Route::resource('produk', ControllersProductController::class);
Route::resource('user', UserController::class);

Route::get('/teshome', function(){
    return view('newhome');
>>>>>>> 8c63de5 (Penambahan MVC)
});

Route::get('/profil', function () {
    return view('profil.profil');
});

Route::get('/cart', function () {
    return view('pemesanan.cart');
});


