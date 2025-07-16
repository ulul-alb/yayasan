<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProgPenyaluranController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\MdataController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\HrdController;

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

Route::get('/', [AuthController::class, 'showLogin'])->name('login');



// Route::middleware('auth')->group(function () {
//     Route::get('/dashbord', function () {
//         return 'Selamat datang di dashboard';
//     });
// });

Route::group([
    'as'        => 'member.',   // untuk route(member.xx)
    'prefix'    => 'member'     //untuk uri
], function() {
    // Login
    Route::group([
        'namespace' => 'Auth',
    ], function() {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });

    // Dashboard
    Route::group([
        'middleware' => ['auth']
    ], function() {
        Route::get('/dashboard', [Controllers\HomeController::class, 'index'])->name('index');

        // Route::get('/dashboard', [Controllers\HomeController::class, 'index'])->name('index');
        Route::get('/profile', [Controllers\HomeController::class, 'profile'])->name('profile');

        // Program
        Route::get('/program/index', [Controllers\ProgramController::class, 'index'])->name('program.index');
        Route::get('/program/penyaluran', [Controllers\ProgramController::class, 'penyaluran'])->name('program.penyaluran');
        Route::get('/program/info', [Controllers\ProgramController::class, 'info'])->name('program.info');

        //Keuangan
        Route::get('/keuangan/transaksi', [Controllers\KeuanganController::class, 'transaksi'])->name('keuangan.transaksi');
        Route::get('/keuangan/kategori', [Controllers\KeuanganController::class, 'kategori'])->name('keuangan.kategori');
        Route::get('/keuangan/skategori', [Controllers\KeuanganController::class, 'skategori'])->name('keuangan.skategori');

        //Inventaris
        Route::get('/aset/inventaris', [Controllers\AsetController::class, 'inventaris'])->name('inventaris');
        Route::get('/aset/kategori', [AsetController::class, 'kategori'])->name('inventaris.kategori');

        //list program
        Route::get('/program/{id}', [ProgramController::class, 'show'])->name('program.show');
        Route::get('/program/{id}/edit', [ProgramController::class, 'edit'])->name('program.edit');
        Route::resource('program', App\Http\Controllers\ProgramController::class);
        Route::post('/program/store', [ProgramController::class, 'store'])->name('program.store');
        Route::put('/program/{id}', [ProgramController::class, 'update'])->name('program.update');
        Route::resource('kategori', ProgramCategoryController::class);

        //penyaluran
        Route::resource('program/penyaluran', ProgPenyaluranController::class)->except(['create', 'store', 'update']);
        Route::get('/program/penyaluran/create', [ProgPenyaluranController::class, 'create'])->name('penyaluran.create');
        Route::post('/program/penyaluran/store', [ProgPenyaluranController::class, 'store'])->name('penyaluran.store');
        Route::get('/program/penyaluran/{id}/edit', [ProgPenyaluranController::class, 'edit'])->name('penyaluran.edit');
        Route::put('/program/penyaluran/{id}', [ProgPenyaluranController::class, 'update'])->name('penyaluran.update');
        //Route::resource('program/penyaluran', ProgPenyaluranController::class);
        //Route::delete('/program/penyaluran/{id}', [ProgPenyaluranController::class, 'destroy'])->name('penyaluran.destroy');

        //Info Program
        Route::resource('program/info', App\Http\Controllers\InfoController::class);

        //Keuangan
        Route::get('/keuangan/jhghdgr', [ProgramController::class, 'show'])->name('keuanganAkun');
        Route::get('/keuangan/jhyyyghdgr', [ProgramController::class, 'show'])->name('keuanganKategori');
        Route::get('/keuangan/o', [ProgramController::class, 'show'])->name('keuanganSumber');
        Route::get('/keuangan/jhgghdgr', [ProgramController::class, 'show'])->name('keuanganTransaksi');

    });

});






