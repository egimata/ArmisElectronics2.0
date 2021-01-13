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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'App\Http\Controllers\MainPageController@index')->name('main');
Route::get('/shop', 'App\Http\Controllers\ShopController@index')->name('shop');
Route::get('/shop/{product}', 'App\Http\Controllers\ShopController@show')->name('shop.show');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::post('/cart', 'App\Http\Controllers\CartController@store')->name('cart.store');

// Route::get('empty' function())

Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
