<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function showProfile()
    {
        return view('profil', [
            'reports' => 3,
            'fostered' => 1,
            'donation' => 150000,
        ]);
    }

    public function edit()
    {
        return view('editProfil'); // Pastikan file `editProfil.blade.php` ada
    }
}
