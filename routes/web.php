<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarprodukController ;
use App\Http\Controllers\SipalbabController;
use App\Http\Controllers\VerifikasiController;

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

Route::get('/menu', function () {
    return view('menu');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/loginCustomer', function () {
    return view('formLoginCustomer');
});
Route::get('/loginAdmin', function () {
    return view('formLoginAdmin');
});
Route::get('/about', function () {
    return view('about');
});



Route::get('/daftarproduk', [DaftarprodukController::class, 'index']);
Route::get('/daftarproduk/tambah', [DaftarprodukController::class, 'tambah']);
Route::post('daftarproduk/store', [DaftarprodukController::class, 'store'])->name('daftarproduk.store');
Route::get('/daftarproduk/edit/{ProdukID}', [DaftarprodukController::class, 'edit']);
Route::post('daftarproduk/update/{ProdukID}', [DaftarprodukController::class, 'update'])->name('daftarproduk.update');
Route::get('daftarproduk/delete/{ProdukID}', [DaftarprodukController::class, 'delete'])->name('daftarproduk.delete');


Route::get('/verifikasiakun', [VerifikasiController::class, 'index']);

