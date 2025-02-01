<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controllers\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/dashboard', [Controllers\HomeController::class, 'index'])->name('index');
Route::get('/profile', [Controllers\HomeController::class, 'profile'])->name('profile');

// Program
Route::get('/program/index', [Controllers\ProgramController::class, 'index'])->name('program.index');
