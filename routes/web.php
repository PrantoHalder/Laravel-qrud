<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorDetailController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\DoctorTypeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[WelcomeController::class,"welcome"])->name('welcome');
Route::get('/login',[LoginController::class,"login"])->name('login');
Route::get('/register',[RegisterController::class,"register"])->name('register');
Route::resources([
    "/users" => UserController::class,
    "/doctortype" => DoctorTypeController::class,
    "/doctordetails" => DoctorDetailController::class,
    "/doctorschedule"=>DoctorScheduleController::class,
    "/apoointment" => AppointmentController::class,
]);
