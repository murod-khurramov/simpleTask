<?php

use App\Http\Controllers\AuthController;
use \App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/calendar', [PageController::class, 'calendar'])->name('calendar');
Route::get('/days', [PageController::class, 'days'])->name('days');
Route::get('/project', [PageController::class, 'project'])->name('project');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
