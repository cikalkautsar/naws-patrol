<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/edukasi', function () {
    return view('edukasi');
});
Route::get('/lapor-hewan', function () {
    return view('lapor-hewan');
})->name('lapor-hewan');

Route::post('/proses-lapor-hewan', function () {

    request()->validate([
        'nama' => 'required|string|max:255',
        'telepon' => 'required|string|max:20',
        'alamat' => 'required|string|max:500',
        'alasan' => 'required|string|max:1000',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:512000', 
        'lokasi_koordinat' => 'nullable|string'
    ]);

    $data = request()->all();

    if (request()->hasFile('foto')) {
        $foto = request()->file('foto');
        $namaFoto = time() . '_' . $foto->getClientOriginalName();
        $foto->move(public_path('uploads/laporan'), $namaFoto);
        $data['foto_path'] = 'uploads/laporan/' . $namaFoto;
    }

    $data['tanggal_lapor'] = now();
    $data['status'] = 'pending';
    
    return view('proses-lapor-hewan', compact('data'))->with('success', 'Laporan berhasil dikirim!');
})->name('proses-lapor-hewan');

require __DIR__.'/auth.php';
