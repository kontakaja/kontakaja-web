<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordResetLinkController;
use App\Http\Controllers\NewPasswordController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Bagian Home
Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

// Bagian Login
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

// Bagian Register
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('register')->middleware('guest');
    Route::post('/register', 'store');
});

// Bagian Forgot Password
Route::controller(PasswordResetLinkController::class)->group(function () {
    Route::get('/forgot-password', 'create')->name('password.request')->middleware('guest');
    Route::post('forgot-password', 'store')->name('password.email')->middleware('guest');
});

// Sub-bagian Forgot Password (Reset Password)
Route::controller(NewPasswordController::class)->group(function () {
    Route::get('reset-password/{token}', 'create')->name('password.reset')->middleware('guest');
    Route::post('reset-password', 'store')->name('password.update')->middleware('guest');
});

// Bagian About Us
Route::get('/about', function () {
    return view ("about", ["title" => "About"]);
})->name("about")->middleware('guest');

//Bagian Contact Us
Route::get('/contact', function () {
    return view('contactUs', ["title" => "Contact"]);
})->name("contact")->middleware('guest');

//Bagian Process
Route::get('/process', function () {
    return view ("process", ["title" => "Process"]);
})->name("process")->middleware('guest');

// Bagian Dashboard
Route::get('/dashboard', [DashboardController::class, "index"])->name("dashboard")->middleware('auth');

// Bagian Contact Dashboard
Route::get('/contact-dashboard', [ContactController::class, "index"])->name("contact-dashboard")->middleware('auth');
