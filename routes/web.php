<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/', [AuthController::class, 'logout'])->name('/');

Route::get('dashboard', DashboardController::class)
    ->name('dashboard')
    ->middleware('auth');
Route::get('shiva', [AuthController::class, 'login'])
    ->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])
    ->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])
    ->name('logout');
Route::get('register', [AuthController::class, 'register'])
    ->name('register');
Route::post('register', [AuthController::class, 'registration'])
    ->name('registration');
