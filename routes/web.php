<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
 
    return "Cleared!";
});

// Route::get('/', function () {
//   return "<h1>Coming soon.....</h1>";
// });

Route::get('/',[AuthController::class,'index']);
Route::post('login',[AuthController::class,'create']);



//protected routes
Route::group(['middleware'=>'web'],function(){

Route::get('dashboard',[UserController::class,'index']);
Route::get('logout',[UserController::class,'destroy']);






//profile
Route::get('profile',[UserController::class,'create']);
Route::post('profile',[UserController::class,'store']);

//change password 
Route::get('change-password',[UserController::class,'change_password']);
Route::post('change-password',[UserController::class,'store_change_password']);




//stock
Route::get('stock','StockController@index');

Route::get('stock/create','StockController@create');
Route::post('add-stock-to-client','StockController@store');

Route::post('get-stock-item','StockController@get_stock_item');

Route::get('stock/show/{id}','StockController@show');

Route::get('stock/edit/{id}','StockController@edit');
Route::post('stock/update','StockController@update');

Route::get('stock/delete/{id}','StockController@destroy');


});

