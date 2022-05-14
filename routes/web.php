<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarprodukController;
use App\Http\Controllers\SipalbabController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DaftarpemesananController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\DetailpemesananController;
use App\Http\Controllers\DaftarcustomerController;

use App\Http\Controllers\AuthController;


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
Route::get('/auth/login', [AuthController::class, 'index']);
Route::post('auth/login/store', [AuthController::class, 'login'])->name('auth.login');
Route::post('auth/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/about', function () {
    return view('about');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role']], function () {
    // Daftar Produk
    Route::get('/daftarproduk', [DaftarprodukController::class, 'index'])->middleware('role');
    Route::get('/daftarproduk/tambah', [DaftarprodukController::class, 'tambah']);
    Route::post('daftarproduk/store', [DaftarprodukController::class, 'store'])->name('daftarproduk.store');
    Route::get('/daftarproduk/edit/{produk_id}', [DaftarprodukController::class, 'edit']);
    Route::put('daftarproduk/update/{produk_id}', [DaftarprodukController::class, 'update'])->name('daftarproduk.update');
    Route::get('daftarproduk/delete/{produk_id}', [DaftarprodukController::class, 'delete'])->name('daftarproduk.delete');

    Route::get('/daftarpemesanan', [DaftarpemesananController::class, 'index']);
    Route::post('daftapemesanan/update/{orders_id}', [DaftarpemesananController::class, 'update'])->name('daftarpemesanan.update');

    Route::get('/detailpemesanan/{orders_id}', [DetailpemesananController::class, 'index']);

    Route::get('/daftarcustomer', [DaftarcustomerController::class, 'index']);
    Route::get('/detailcustomer/{user_id}', [DaftarcustomerController::class, 'detail']);

});

Route::group(['middleware' => ['custom']], function () {
    Route::get('/pembayaran', [PembayaranController::class, 'index']);

    Route::get('/pesanan/{produk_id}', [PesananController::class, 'index']);
    Route::post('pesanan/store', [PesananController::class, 'store'])->name('pesanan.store');

    Route::get('/shop/{customer_id}', [ShopController::class, 'index']);
    Route::post('shop/store', [ShopController::class, 'store'])->name('shop.store');
    Route::get('/shop/delete/{checkout_id}', [ShopController::class, 'delete']);
    Route::post('feedback/store', [ContactController::class, 'store'])->name('feedback.store');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/auth/logout', function(){
    if(session()->has('user'))
    {
        session()->pull('user');
        session()->pull('user_id');
    }
    return redirect('/');
});


