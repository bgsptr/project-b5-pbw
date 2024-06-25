<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);
Route::post("/register", [RegisterController::class, 'register']);

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');

Route::get('/guest/dashboard', [GuestController::class, 'index'])->name('guest.dashboard');

Route::get('/resepsionis/dashboard', [GuestController::class, 'index'])->name('resepsionis.dashboard');

