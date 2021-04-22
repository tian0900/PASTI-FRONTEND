<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarprodukController ;
use App\Http\Controllers\SipalbabController;

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


