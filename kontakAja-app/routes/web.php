<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordResetLinkController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    Route::get('forgot-password', 'create')->name('password.request')->middleware('guest');
    Route::post('forgot-password', 'store')->name('password.email')->middleware('guest');
});

// Sub-bagian Forgot Password (Reset Password)
Route::controller(NewPasswordController::class)->group(function () {
    Route::get('reset-password/{token}', 'create')->name('password.reset')->middleware('guest');
    Route::post('reset-password', 'store')->name('password.update')->middleware('guest');
});

// Bagian Dashboard
Route::get('/dashboard', [DashboardController::class, "index"])->name("dashboard")->middleware('auth');

// Bagian Profile Dashboard
Route::get('/dashboard/profile', [ProfileController::class, "index"])->name("profile")->middleware('auth');

// Bagian Contact Dashboard
Route::controller(ContactController::class)->group(function () {
    Route::get('/dashboard/contacts', "index")->name("index-contact")->middleware('auth');
    Route::get('/dashboard/contacts/show/{id}Contact', "show")->name("show-contact")->middleware('auth');
    Route::get('/dashboard/contacts/create', "create")->name("create-contact")->middleware('auth');
    Route::post('/dashboard/contacts/store', "store")->name("store-contact")->middleware('auth');
    Route::get('/dashboard/contacts/edit/{id}Contact', "edit")->name("edit-contact")->middleware('auth');
    Route::post('/dashboard/contacts/update/{id}Contact', "update")->name("update-contact")->middleware('auth');
    Route::delete('/dashboard/contacts/delete/{id}Contact', "destroy")->name("delete-contact")->middleware('auth');
});

// Bagian Todo Dashboard
Route::get('/dashboard/todo', function () {
    $user = Auth::user()->username;
    return view ("dashboard.todo.index", ["title" => "Todo"])->with('user', $user);
})->name("todo")->middleware('auth');
