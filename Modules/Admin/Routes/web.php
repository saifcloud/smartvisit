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
Route::get('doctor','DoctorController@index');

Route::get('doctor/create','DoctorController@create');
Route::post('doctor/store','DoctorController@store');

Route::get('doctor/show/{id}','DoctorController@show');

Route::get('doctor/edit/{id}','DoctorController@edit');
Route::post('doctor/update','DoctorController@update');

Route::get('doctor/delete/{od}','DoctorController@destroy');

Route::post('doctor/quantity','DoctorController@product_quantity');




//client
Route::get('client','ClientController@index');

Route::get('client/create','ClientController@create');
Route::post('client/store','ClientController@store');

Route::get('client/show/{id}','ClientController@show');

Route::get('client/edit/{id}','ClientController@edit');
Route::post('client/update','ClientController@update');

Route::get('client/delete/{id}','ClientController@destroy');



//clinical updates

Route::get('clinical-update','AdminController@clinical_update');
Route::get('clinical-create','AdminController@clinical_create');
Route::post('clinical-store','AdminController@clinical_store');
Route::get('clinical-edit/{id}','AdminController@clinical_edit');
Route::post('clinical-update-post','AdminController@clinical_update_post');
Route::get('clinical-delete/{id}','AdminController@clinical_delete');


//profile
Route::get('profile','AdminController@create');
Route::post('profile','AdminController@store');

//change password 
Route::get('change-password','AdminController@change_password');
Route::post('change-password','AdminController@store_change_password');


//logout
Route::get('logout','AdminController@destroy');


});
