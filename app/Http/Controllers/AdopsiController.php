<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdopsiController extends Controller
{
    public function showDetail($name)
    {
        $pets = [
            'Daisy' => [
                'name' => 'Daisy',
                'image' => 'img/kucing.jpeg',
                'breed' => 'Mix Dom Anggora',
                'age' => '1 Tahun',
                'color' => 'Putih Lillac',
                'location' => 'Shelter 2, Cimahi',
                'gender' => 'Betina',
                'description' => 'Daisy adalah kucing anggora yang aktif, suka bermain dan senang dielus.'
            ],
            'Mochi' => [
                'name' => 'Mochi',
                'image' => 'img/kucing.jpeg',
                'breed' => 'Mix Dom Anggora',
                'age' => '1 Tahun',
                'color' => 'Putih Lillac',
                'location' => 'Shelter 2, Cimahi',
                'gender' => 'Betina',
                'description' => 'Daisy adalah kucing anggora yang aktif, suka bermain dan senang dielus.'
            ],
            'Neko' => [
                'name' => 'Neko',
                'image' => 'img/kucing.jpeg',
                'breed' => 'Mix Dom Anggora',
                'age' => '1 Tahun',
                'color' => 'Putih Lillac',
                'location' => 'Shelter 2, Cimahi',
                'gender' => 'Betina',
                'description' => 'Daisy adalah kucing anggora yang aktif, suka bermain dan senang dielus.'
            ],
            // Tambah hewan lainnya...
        ];

        if (!isset($pets[$name])) {
            abort(404, 'Hewan tidak ditemukan.');
        }

        $pet = $pets[$name];
        return view('detailAdopsi', compact('pet'));
    }

    public function showForm(Request $request)
{
    $nama = $request->query('nama'); // Ambil nama dari query string (?nama=...)

    return view('formAdopsi', compact('nama'));
}


}
