<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LaporanController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard-admin', [DashboardController::class,'index'])->name('dashboard-admin');
Route::get('/dashboard-petugas', [DashboardController::class,'index1'])->name('dashboard-petugas');
Route::get('/dashboard-siswa', [DashboardController::class,'index2'])->name('dashboard-siswa');
Route::get('spp', [SppController::class, 'index']);
Route::get('spp/create', [SppController::class, 'create']);
Route::post('spp/store', [SppController::class, 'store']);
Route::get('spp/delete/{id}', [SppController::class, 'delete']);
Route::get('spp/edit/{id}', [SppController::class, 'edit'])->name('spp.edit');
Route::post('spp/update/{id}', [SppController::class, 'update'])->name('spp.update');

Route::get('siswa', [SiswaController::class, 'index']);
Route::get('siswa/create', [SiswaController::class, 'create']);
Route::get('siswa/bayar/{id}', [SiswaController::class, 'bayar']);
Route::post('siswa/prosesbayar/{id}', [SiswaController::class, 'prosesbayar']);
Route::post('siswa/store', [SiswaController::class, 'store']);
Route::get('siswa/delete/{id}', [SiswaController::class, 'delete']);
Route::get('siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');

Route::get('kelas', [KelasController::class, 'index']);
Route::get('kelas/create', [KelasController::class, 'create']);
Route::post('kelas/store', [KelasController::class, 'store']);
Route::get('kelas/delete/{id}', [KelasController::class, 'delete']);
Route::get('kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::post('kelas/update/{id}', [KelasController::class, 'update'])->name('kelas.update');

Route::get('pembayaran', [PembayaranController::class, 'index']);
Route::get('pembayaran/create', [PembayaranController::class, 'create']);
Route::post('pembayaran/store', [PembayaranController::class, 'store']);
Route::get('pembayaran/delete/{id}', [PembayaranController::class, 'delete']);
Route::get('pembayaran/edit/{id}', [PembayaranController::class, 'edit'])->name('pembayaran.edit');
Route::post('pembayaran/update/{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');
Route::get('pembayaran/cetak-pdf/{id}', [PembayaranController::class,'cetakPdf'])->name('pembayaran.cetak-pdf');
Route::get('pembayaran/history_pembayaran/cetak-pdf/{id}', [PembayaranController::class,'cetakPdf1'])->name('history_pembayaran.cetak-pdf');
Route::get('pembayaran/history_pembayaran', [PembayaranController::class, 'history_pembayaran']);

Route::get('petugas', [PetugasController::class, 'index']);
Route::get('petugas/create', [PetugasController::class, 'create']);
Route::post('petugas/store', [PetugasController::class, 'store']);
Route::get('petugas/delete/{id}', [PetugasController::class, 'delete']);
Route::get('petugas/edit/{id}', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::post('petugas/update/{id}', [PetugasController::class, 'update'])->name('petugas.update');

Route::prefix('laporan')->group(function () {
    Route::match(['POST','GET'],'/', [LaporanController::class,'index'])->name('laporan.index');
    Route::get('/cetak-pdf/{tgl_bayar}', [LaporanController::class,'cetakPdf'])->name('laporan.cetak-pdf');
});



Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';