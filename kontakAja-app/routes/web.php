<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProcessController;
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
    Route::get('/register', 'index')->middleware('guest');
    Route::post('/register', 'store');
});

// Bagian About Us
Route::get('/about', [AboutController::class, "about"])->name("about")->middleware('guest');

//Bagian Contact
Route::get('/contact', [ContactController::class, "contact"])->name("contact")->middleware('guest');

//Bagian Process
Route::get('/process', [ProcessController::class, "process"])->name("process")->middleware('guest');

// Bagian Dashboard
Route::get('/dashboard', [DashboardController::class, "dashboard"])->name("dashboard")->middleware('auth');
