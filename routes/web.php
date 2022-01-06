<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('pages.home');
// })->name('home');

// Route::get('/home', function () {
//     return view('pages.home');
// })->name('home');

// Route::get('/product-detail', function () {
//     return view('pages.detail');
// })->name('detail');

// Route::get('/login', function () {
//     return view('pages.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('pages.register');
// })->name('register');

// Route::get('/cart', function () {
//     return view('pages.cart');
// })->name('cart');

// Route::get('/transaction', function () {
//     return view('pages.transaction');
// })->name('transaction');

// Route::get('/detail-transaction', function () {
//     return view('pages.detailTransaction');
// })->name('detailtransaction');

// Route::get('/search', function () {
//     return view('pages.search');
// })->name('search');

// Route::get('/update-profile', function () {
//     return view('pages.updateProfile');
// })->name('updateprofile');

// Route::get('/update-product', function () {
//     return view('pages.updateProduct');
// })->name('updateproduct');

// Route::get('/insert-product', function () {
//     return view('pages.insertProduct');
// })->name('insertproduct');

// Route::get('/manage-user', function () {
//     return view('pages.manageUser');
// })->name('manageuser');

// Route::get('/app', function () {
//     return view('layouts.app');
// })->name('app');

// Controller

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/detail/{slug}', 'DetailController@index')
    ->name('detail');

    
Route::get('/login', 'LoginController@index')
    ->name('login');

Route::get('/register', 'RegisterController@index')
    ->name('register');

Route::get('/cart', 'CartController@index')
    ->name('cart');

Route::post('store','CartController@store')->name('cart_store');

Route::get('/transaction', 'TransactionController@index')
    ->name('transaction');

Route::get('/detail-transaction', 'DetailTransactionController@index')
    ->name('detailtransaction');

Route::get('/search', 'SearchController@index')
    ->name('search');

Route::get('/update-profile', 'UpdateProfileController@index')
    ->name('updateprofile');

Route::get('/update-profile', 'UpdateProfileController@update')
    ->name('updateprofile');

// Route::get('/update-profile', [ 'as' => 'user.edit', 'uses' => 'UpdateProfileController@edit']);
// Route::get('/update-profile', 'UpdateProfileController@edit')
    // ->name('updateprofile');

// Route::post('/update-profile', 'UpdateProfileController@update')
//     ->name('updateprofile');
// Route::get('update','UpdateProfileController@update')->name('profile_update');

Route::get('/update-product', 'UpdateProductController@index')
    ->name('updateproduct');

Route::get('/update-product', 'UpdateProductController@update')
    ->name('updateproduct');

Route::get('/insert-product', 'InsertProductController@index')
    ->name('insertproduct');

Route::get('/manage-user', 'ManageUserController@index')
    ->name('manageuser');

Route::delete('/delete/{items}','ManageUserController@destroy')->name('delete_user');

// Route::group(['middleware' => 'admin'],

//     function(){
//         Route::get('/', 'HomeController@index')
//             ->name('home');

//         Route::resource('product', 'insertProductController');
//     }
// );


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', 'HomeController@index')
            ->name('home');
        
        Route::resource('product', 'ProductController');
        Route::resource('transaction', 'TransactionController');
    });

Auth::routes(['verify' => true]);