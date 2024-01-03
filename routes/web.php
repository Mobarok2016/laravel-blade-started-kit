<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/registration','pages.auth.registration-page');
Route::view('/login','pages.auth.login-page');
Route::view('/reset-password','pages.auth.reset-pass-page');
Route::view('/send-otp','pages.auth.send-otp-page');
Route::view('/verify-otp','pages.auth.verify-otp-page');
Route::view('/dashboard','pages.dashboard.dashboard-page');
