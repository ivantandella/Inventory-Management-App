<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', [LandingPageController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/logout', function() {
    auth()->logout();
    session()->flush();
    return Redirect::to('/');
})->name('keluar');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/akun', [AkunController::class, 'index'])->name('akun.index');
Route::get('/akun/{id}', [AkunController::class, 'show'])->name('akun.show');
Route::delete('/akun/{id}', [AkunController::class, 'destroy'])->name('akun.destroy');

Route::get('/stok_barang', [StokBarangController::class, 'index'])->name('stok_barang.index');
Route::get('/stok_barang/create', [StokBarangController::class, 'create'])->name('stok_barang.create');
Route::post('/stok_barang', [StokBarangController::class, 'store'])->name('stok_barang.store');
Route::get('/stok_barang/{id}/edit_harga', [StokBarangController::class, 'editHarga'])->name('stok_barang.editHarga');
Route::put('stok_barang/{id}/update_harga', [StokBarangController::class, 'updateHarga'])->name('stok_barang.updateHarga');
Route::get('/stok_barang/{id}/tambah_stok', [StokBarangController::class, 'editStok'])->name('stok_barang.editStok');
Route::put('/stok_barang/{id}/update_stok', [StokBarangController::class, 'updateStok'])->name('stok_barang.updateStok');
Route::delete('/stok_barang/{id}', [StokBarangController::class, 'destroy'])->name('stok_barang.destroy');

Route::get('/barang_masuk', [BarangMasukController::class, 'index'])->name('barang_masuk');

Route::get('/barang_keluar', [BarangKeluarController::class, 'index'])->name('barang_keluar');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/riwayat_transaksi', [TransaksiController::class, 'riwayatTransaksi'])->name('riwayat_transaksi');
Route::get('/request_barang', [TransaksiController::class, 'create'])->name('request_barang');
Route::post('/request_barang', [TransaksiController::class, 'store'])->name('request_barang.store');
Route::put('/accept/{id_transaksi}', [TransaksiController::class, 'accept'])->name('accept');
Route::put('/reject/{id_transaksi}', [TransaksiController::class, 'reject'])->name('reject');
