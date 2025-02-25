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
Route::get('/program/penyaluran', [Controllers\ProgramController::class, 'penyaluran'])->name('program.penyaluran');
Route::get('/program/info', [Controllers\ProgramController::class, 'info'])->name('program.info');

//Keuangan
Route::get('/keuangan/transaksi', [Controllers\KeuanganController::class, 'transaksi'])->name('keuangan.transaksi');
Route::get('/keuangan/kategori', [Controllers\KeuanganController::class, 'kategori'])->name('keuangan.kategori');
Route::get('/keuangan/skategori', [Controllers\KeuanganController::class, 'skategori'])->name('keuangan.skategori');

//Master Data
Route::get('/mdata/staff', [Controllers\MdataController::class, 'staff'])->name('mdata.staff');
Route::get('/mdata/donatur', [Controllers\MdataController::class, 'donatur'])->name('mdata.donatur');
Route::get('/mdata/mitra', [Controllers\MdataController::class, 'mitra'])->name('mdata.mitra');
Route::get('/mdata/relawan', [Controllers\MdataController::class, 'relawan'])->name('mdata.relawan');

//Aset Manajemen
Route::get('/Aset/inventaris', [Controllers\AsetController::class, 'inventaris'])->name('aset.inventaris');
Route::get('/Aset/Kategori', [Controllers\AsetController::class, 'Kategori'])->name('aset.Kategori');
