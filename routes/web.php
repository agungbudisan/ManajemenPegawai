<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route untuk PegawaiController
Route::middleware('auth')->resource('pegawais', PegawaiController::class);

Route::get('/', function () {
    return view('welcome');
});

// Route untuk UserController
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
