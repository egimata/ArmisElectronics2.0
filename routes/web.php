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
Route::delete('/cart/{product}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');
Route::post('/cart/saveForLater/{product}', 'App\Http\Controllers\CartController@saveForLater')->name('cart.saveForLater');

Route::delete('/saved/{product}', 'App\Http\Controllers\SaveController@destroy')->name('save.destroy');
Route::post('/saved/saveForLater/{product}', 'App\Http\Controllers\SaveController@switchToCart')->name('save.switchToCart');

Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'App\Http\Controllers\CheckoutController@store')->name('checkout.store');


Route::get('empty', function(){
    Cart::instance('saveForLater')->destroy();
});

Route::view('/thankyou', 'thankyou');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
