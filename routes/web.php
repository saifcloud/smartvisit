<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\PaymentController;
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

Route::get('/',[HomeController::class,'index']);


Route::get('doctor/login',[AuthController::class,'index']);
Route::post('doctor/login',[AuthController::class,'doctor_login']);



//protected routes
Route::group(['middleware'=>'web','prefix'=>'doctor'],function(){

Route::get('dashboard',[DoctorController::class,'index']);
Route::get('logout',[UserController::class,'destroy']);

Route::get('patients',[PatientController::class,'index']);
Route::get('patient-detail',[PatientController::class,'patient_detail']);

Route::get('consult-patient',[PatientController::class,'consult_patient']);

Route::get('clinical-update',[HomeController::class,'clinical_update']);
Route::get('clinical-details',[HomeController::class,'clinical_details']);

Route::get('availability',[AvailabilityController::class,'index']);
Route::get('availability-edit',[AvailabilityController::class,'availability_edit']);

Route::get('payments',[PaymentController::class,'index']);


//profile
Route::get('profile',[DoctorController::class,'profile']);
Route::post('get-state',[HomeController::class,'get_state']);
Route::post('get-city',[HomeController::class,'get_city']);
Route::post('form-load-data',[HomeController::class,'form_load_data']);
Route::post('add-doctor-information',[DoctorController::class,'add_doctor_information']);

Route::get('ordertest',[PatientController::class,'ordertest']);

Route::get('prescribe',[PatientController::class,'prescribe']);










});

