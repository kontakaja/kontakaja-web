<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Bagian Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Bagian About Us
Route::get('/about', [AboutController::class, "about"])->name("about")->middleware('guest');

//Bagian Contact
Route::get('/contact', [ContactController::class, "Contact"])->name("Contact")->middleware('guest');

// Bagian Dashboard
Route::get('/dashboard', [DashboardController::class, "dashboard"])->name("dashboard")->middleware('auth');
