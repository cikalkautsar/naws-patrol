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
});


Route::get('/register-foster-home', function () {
    return view('register-as-foster-home');
})->name('register.foster');

Route::post('/register-foster-home', function () {
    return redirect()->route('foster.home.landing');
});

Route::get('/foster-home', function () {
    return view('landing-foster-home');
})->name('foster.home.landing');

Route::get('/foster-home/info', function () {
    return view('foster-home-info');
})->name('foster.home.info');

Route::get('/foster-home/form', function () {
    return view('foster-home-form');
})->name('foster.home.form');

Route::post('/foster-home/form', function () {
    return redirect()->route('foster.home.landing');
});

Route::get('/foster-home/report', function () {
    return view('foster-home-report-progres');
})->name('foster.home.report');

Route::get('/lapor-hewan', function () {
    return view('lapor-hewan');
})->name('lapor.hewan');

Route::post('/lapor-hewan', function () {
    return redirect()->route('foster.home.report');
});

require __DIR__.'/auth.php';
