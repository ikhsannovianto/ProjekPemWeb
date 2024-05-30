<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RTController;
use App\Http\Controllers\LingkunganController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('rts', RTController::class);
Route::resource('lingkungans', LingkunganController::class);
Route::resource('wargas', WargaController::class);
Route::resource('tagihans', TagihanController::class);
Route::resource('pembayarans', PembayaranController::class);

