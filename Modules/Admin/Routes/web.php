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

Route::get('/admin','AuthController@index');
Route::post('admin/login','AuthController@create');

//forget password
Route::get('admin/forget-password','AuthController@store');

Route::post('admin/forget-password','AuthController@show');

//protected routes
Route::group(['prefix'=>'admin','middleware' => ['admin']],function() {

Route::get('dashboard', 'AdminController@index');


//product
Route::get('product','ProductController@index');

Route::get('product/create','ProductController@create');
Route::post('product/store','ProductController@store');

Route::get('product/show/{id}','ProductController@show');

Route::get('product/edit/{id}','ProductController@edit');
Route::post('product/update','ProductController@update');

Route::get('product/delete/{od}','ProductController@destroy');

Route::post('product/quantity','ProductController@product_quantity');




//client
Route::get('client','ClientController@index');

Route::get('client/create','ClientController@create');
Route::post('client/store','ClientController@store');

Route::get('client/show/{id}','ClientController@show');

Route::get('client/edit/{id}','ClientController@edit');
Route::post('client/update','ClientController@update');

Route::get('client/delete/{id}','ClientController@destroy');



//stock
Route::get('stock','StockController@index');

Route::get('stock/create','StockController@create');
Route::post('add-stock-to-client','StockController@store');

Route::post('get-stock-item','StockController@get_stock_item');

Route::get('stock/show/{id}','StockController@show');

Route::get('stock/edit/{id}','StockController@edit');
Route::post('stock/update','StockController@update');

Route::get('stock/delete/{id}','StockController@destroy');


//profile
Route::get('profile','AdminController@create');
Route::post('profile','AdminController@store');

//change password 
Route::get('change-password','AdminController@change_password');
Route::post('change-password','AdminController@store_change_password');


//logout
Route::get('logout','AdminController@destroy');


});
