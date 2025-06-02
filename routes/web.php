<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AdopsiController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/donasi', function () {
    return view('donasi');
});

Route::get('/data-pendonasi', function () {
    $amount = request('amount');
    return view('dataPendonasi', compact('amount'));
});

Route::get('/metode-donasi', function (Request $request) {
    $amount = $request->query('amount');
    return view('metodeDonasi', compact('amount'));
});

Route::get('/pembayaran-donasi', function () {
    return view('pembayaranDonasi');
})->name('pembayaranDonasi');

Route::get('/qr-code', function () {
    return view('qrDonasi');
})->name('qr-code');

Route::get('/adopsi', function () {
    return view('adopsi');
})->name('adopsi');

Route::get('/detail-adopsi/{name}', [AdopsiController::class, 'showDetail'])->name('detail.adopsi');

Route::get('/form-adopsi', [AdopsiController::class, 'showForm'])->name('adopsi.form');

Route::get('/konfirmasiAdopsi', function () {
    return view('konfirmasiAdopsi');
})->name('konfirmasiAdopsi');

Route::get('/sukses-adopsi', function () {
    return view('suksesAdopsi');
})->name('adopsi.sukses');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
