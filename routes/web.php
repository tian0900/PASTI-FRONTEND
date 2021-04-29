<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarprodukController ;
use App\Http\Controllers\SipalbabController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DaftarpemesananController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [SipalbabController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/loginCustomer', function () {
    return view('formLoginCustomer');
});
Route::get('/loginAdmin', function () {
    return view('formLoginAdmin');
});
Route::get('/about', function () {
    return view('about');
});


// Daftar Produk
Route::get('/daftarproduk', [DaftarprodukController::class, 'index']);
Route::get('/daftarproduk/tambah', [DaftarprodukController::class, 'tambah']);
Route::post('daftarproduk/store', [DaftarprodukController::class, 'store'])->name('daftarproduk.store');
Route::get('/daftarproduk/edit/{produk_id}', [DaftarprodukController::class, 'edit']);
Route::post('daftarproduk/update/{produk_id}', [DaftarprodukController::class, 'update'])->name('daftarproduk.update');
Route::get('daftarproduk/delete/{produk_id}', [DaftarprodukController::class, 'delete'])->name('daftarproduk.delete');


Route::get('/daftarpemesanan', [DaftarpemesananController::class, 'index']);

Route::get('/verifikasiakun', [VerifikasiController::class, 'index']);

