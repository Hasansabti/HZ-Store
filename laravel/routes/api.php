<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'Api\Auth\RegisterController@register');
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('refresh', 'Api\Auth\LoginController@refresh');
Route::post('social_auth', 'Api\Auth\SocialAuthController@socialAuth');

Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'Api\Auth\LoginController@logout');

    Route::get('posts', 'Api\PostController@index');
	  Route::post('user', 'Api\AccountController@index');
	
	Route::post('cart/total','Api\CartController@total');
Route::post('cart/updateitem','Api\CartController@updateitem');
Route::post('cart/deleteitem','Api\CartController@deleteitem');
Route::post('cart/count','Api\CartController@count');
Route::post('cart/addtocart','Api\CartController@addtocart')->name('cartadd');
Route::resource('cart','Api\CartController');

Route::post('checkout/placeorder','Api\checkoutController@placeorder');
Route::get('checkout','Api\checkoutController@index')->name('checkout');
//Route::resource('checkout','checkoutController');

Route::post('account/addreview','Api\AccountController@addReview');
Route::post('account/review','Api\AccountController@review');
Route::post('account/order','Api\AccountController@order');
Route::post('account/orders','Api\AccountController@orders');
Route::post('account/settings','Api\AccountController@settings');

Route::post('account/address/delete','Api\AddressController@delete');
Route::post('account/address/add','Api\AddressController@create');
Route::post('account/address','Api\AddressController@index');

Route::resource('account','Api\AccountController');
});

Route::get('/store/{cat}', 'Api\productsController@listcat');
Route::get('/store', 'Api\productsController@shop')->name('store');

Route::get('product/search','Api\productsController@search');

Route::get('product/q','Api\productsController@show')->name('product');
Route::resource('product','Api\productsController');






Route::get('/home', 'HomeController@index');
