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
    return view('layouts.home');
})->name('home');

Route::get('/home', function () {
    return view('layouts.home');
})->name('home');

Route::get('/product-detail', function () {
    return view('layouts.detail');
})->name('detail');

Route::get('/login', function () {
    return view('layouts.login');
})->name('login');

Route::get('/register', function () {
    return view('layouts.register');
})->name('register');

Route::get('/cart', function () {
    return view('layouts.cart');
})->name('cart');

Route::get('/transaction', function () {
    return view('layouts.transaction');
})->name('transaction');

Route::get('/detail-transaction', function () {
    return view('layouts.detailTransaction');
})->name('detailtransaction');

Route::get('/search', function () {
    return view('layouts.search');
})->name('search');