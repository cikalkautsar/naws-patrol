<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi & Crowdfunding</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        @vite(['resources/css/dataPendonasi.css', 'resources/js/dataPendonasi.js'])
</head>

<body>
    @include('navbar', ['active' => 'donasi'])
    <div class="container">
        <h1>Donasi & Crowdfunding</h1>

        <div class="wrapper">
            <div class="card image-card">
                <img src="{{ asset('img/cuteanimals.png') }}" alt="Hewan donasi" />
            </div>

            <div class="card form-card">
                <h2><span style="color:#FAAF32">Ayo</span> <span style="color:#2B6ED6">Berdonasi</span></h2>
                <form onsubmit="handleForm(event)">
                    <div class="form-section">
                        <input type="text" name="nama_depan" placeholder="Nama Depan" required />
                        <input type="text" name="nama_belakang" placeholder="Nama Belakang" required />
                        <input type="email" name="email" placeholder="Email" required />
                        <input type="tel" name="no_telp" placeholder="Nomor Telepon" required />

                        <div class="alamat-group">
                            <select id="provinsi" required>
                                <option value="">Pilih Provinsi</option>
                            </select>

                            <select id="kabupaten" required>
                                <option value="">Pilih Kabupaten/Kota</option>
                            </select>

                            <input type="text" placeholder="Kode Pos" class="kodepos" />
                        </div>
                    </div>

                    <label class="checkbox">
                        <input type="checkbox" />
                        Donasi sebagai anggota organisasi
                    </label>

                    <input type="text" placeholder="Lainnya" class="lainnya" />

                    <label class="checkbox">
                        <input type="checkbox" />
                        Tetap beritahu saya lewat email
                    </label>

                    <button type="submit">Lanjutkan</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
