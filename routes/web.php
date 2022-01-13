<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PractitionerController;

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


// Route for display hompage
Route::get('/', [HomepageController::class,'index']);

// Route for handle search
Route::post('/practitioners/search', [PractitionerController::class,'search']);

// Route for display login form
Route::get('login', function () {
    return view('auth.login');
})->name('auth.login');

// Route for handle login form
Route::post('login', [AuthController::class, 'login'])->name('auth.login.action');

// Route for display signup form
Route::get('signup', function () {
    return view('auth.signup');
})->name('auth.signup');

// Route for handle login form
Route::post('signup', [AuthController::class, 'signup'])->name('auth.signup.action');
// Route for handle logout
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

// Route for HANDLE ALL appointments By Resource Controller
// https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller
Route::resource('appointments', AppointmentController::class);
