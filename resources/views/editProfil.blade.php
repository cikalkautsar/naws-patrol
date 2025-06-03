<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profil</title>
    @vite(['resources/css/editProfil.css', 'resources/js/editProfil.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <h2>Edit Profile</h2>
        <div class="border-gradient">
            <div class="form-box">
                <div class="form-group">
                    <label for="fotoProfil">Foto Profil</label>
                    <span class="colon">:</span>
                    <input type="file" id="fotoProfil" />
                </div>

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <span class="colon-nama">:</span>
                    <input type="text" id="nama" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <span class="colon-email">:</span>
                    <input type="email" id="email" />
                </div>

                <div class="form-group">
                    <label for="nomor">Nomor HP</label>
                    <span class="colon-nomor">:</span>
                    <input type="text" id="nomor" />
                </div>

                <div class="button-group">
                    <button class="btn cancel">Batal</button>
                    <button class="btn save">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="cat-container">
        <img src="{{ asset('img/meong.png') }}" alt="Kucing" class="cat-img" />
    </div>

    <script>
    const profilUrl = @json(route('profil'));
</script>
</body>

</html>
