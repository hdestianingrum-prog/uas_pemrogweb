<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman utama redirect ke login
Route::get('/', function () {
    return redirect('/login');
});

// LOGIN
Route::get('/login', [AuthController::class, 'login'])->name('login.form');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login');

// REGISTER
Route::get('/register', [AuthController::class, 'register'])->name('register.form');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
