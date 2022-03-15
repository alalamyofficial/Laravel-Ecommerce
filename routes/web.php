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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{product}','CartController@add')
            ->name('add_to_cart')->middleware('auth');

Route::get('/cart','CartController@index')
            ->name('cart.index')->middleware('auth'); 

Route::get('/cart/destroy/{itemId}','CartController@destroy')
            ->name('cart.destroy')->middleware('auth');              

Route::get('/cart/update/{itemId}','CartController@update')
            ->name('cart.update')->middleware('auth');                 

Route::get('/checkout','CartController@checkout')
            ->name('cart.checkout')->middleware('auth');   

//Orders            
Route::resource('/orders','OrderController')->middleware('auth');   
        
//Shops
Route::resource('/shops','ShopController')->middleware('auth');


//paypal
Route::get('paypal/checkout/{order}', 'PayPalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
