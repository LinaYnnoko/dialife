<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\DoctorRegistrationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
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

Route::view('/welcome','welcome')->name('welcome');
Route::view('/cabinet','cabinet')->name('cabinet');

Route::get('/registration', [RegistrationController::class, 'create'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'store']);

Route::get('/doctor_registration', [DoctorRegistrationController::class, 'create'])->name('doctor_registration');
Route::post('/doctor_registration', [DoctorRegistrationController::class, 'store']);

Route::view('/authorization','authorization')->name('authorization');
Route::post('/authorization', [AuthorizationController::class, 'store']);
