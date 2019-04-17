<?php

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

Route::get('/', 'pagesController@index')->name('home');
Route::get('docs/diagrams', 'pagesController@dig')->name('dig');
Route::get('docs/impl', 'pagesController@impl')->name('impl');
Route::get('docs/srs', 'pagesController@srs')->name('srs');
Route::get('docs/sds', 'pagesController@sds')->name('sds');
Route::get('docs/test', 'pagesController@test')->name('test');
Route::get('docs/schedue', 'pagesController@sch')->name('mng');

Route::get('/store/{cat}', 'productsController@listcat');
Route::get('/store', 'productsController@shop')->name('store');

Route::get('/user/{id}', function ($id) {
    return 'This is a '.$id;
});
Route::get('product/search','productsController@search');

Route::get('product/{id}','productsController@show')->name('product');
Route::resource('product','productsController');

Route::post('checkout/placeorder','checkoutController@placeorder');
Route::get('checkout','checkoutController@index')->name('checkout');
//Route::resource('checkout','checkoutController');

Route::post('cart/total','CartController@total');
Route::post('cart/updateitem','CartController@updateitem');
Route::post('cart/deleteitem','CartController@deleteitem');
Route::post('cart/count','CartController@count');
Route::post('cart/addtocart','CartController@addtocart')->name('cartadd');
Route::resource('cart','CartController');

Route::post('account/addreview','AccountController@addReview');
Route::post('account/review','AccountController@review');
Route::post('account/order','AccountController@order');
Route::post('account/orders','AccountController@orders');
Route::post('account/settings','AccountController@settings');
Route::resource('account','AccountController');


Auth::routes();

Route::get('/home', 'pagesController@index');
Route::get('/logout', function () {
    Auth::logout();
   return redirect()->route('home');
});