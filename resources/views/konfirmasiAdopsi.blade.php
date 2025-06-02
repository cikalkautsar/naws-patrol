<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konfirmasi Adopsi</title>
    @vite(['resources/css/konfirmasiAdopsi.css', 'resources/js/konfirmasiAdopsi.js', 'resources/css/navbarWarna.css'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
    @include('navbar', ['active' => 'adopsi'])
    <div class="detail-container">
        <div class="main-image">
            <img id="petImage" src="{{ asset('img/default.jpg') }}" alt="Pet Image" />
        </div>
    </div>

    <div class="stepper">
        <div class="step completed"><span class="checkmark">&#10003;</span></div>
        <div class="line"></div>
        <div class="step completed"><span class="checkmark">&#10003;</span></div>
        <div class="line"></div>
        <div class="step active"><span class="number">3</span></div>
    </div>

    <div class="form-container">
        <h2 class="title-center">Konfirmasi Adopsi</h2>
        <div class="pet-info-box">
            <div class="pet-info-image">
                <img id="infoPetImage" src="{{ asset('img/default.jpg') }}" alt="Pet Image" />
            </div>
            <div class="pet-info-details">
                <div class="info-item">
                    <img src="{{ asset('img/namahewan.png') }}" alt="Icon" />
                    <div>
                        <strong>Nama Hewan</strong><br />
                        <span id="infoPetName">-</span>
                    </div>
                </div>
                <div class="info-item">
                    <img src="{{ asset('img/gender.png') }}" alt="Icon" />
                    <div>
                        <strong>Jenis Kelamin</strong><br />
                        <span id="infoPetGender">-</span>
                    </div>
                </div>
                <div class="info-item">
                    <img src="{{ asset('img/usia.png') }}" alt="Icon" />
                    <div>
                        <strong>Usia</strong><br />
                        <span id="infoPetAge">-</span>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="title-right">Informasi Pemohon</h2>
        <form>
            <div class="form-group">
                <div class="form-label-wrapper"><label>Nama Lengkap</label></div>
                <div class="vertical-line"></div>
                <div class="form-input-wrapper">
                    <input type="text" id="nama" readonly />
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-wrapper"><label>Umur</label></div>
                <div class="vertical-line"></div>
                <div class="form-input-wrapper">
                    <input type="number" id="umur" readonly />
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-wrapper"><label>Alamat</label></div>
                <div class="vertical-line"></div>
                <div class="form-input-wrapper">
                    <input type="text" id="alamat" readonly />
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-wrapper"><label>Jenis Rumah</label></div>
                <div class="vertical-line"></div>
                <div class="form-input-wrapper">
                    <input type="text" id="jenisRumah" readonly />
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-wrapper"><label>Aktivitas Harian</label></div>
                <div class="vertical-line"></div>
                <div class="form-input-wrapper">
                    <input type="text" id="aktivitas" readonly />
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-wrapper"><label>Alasan Adopsi</label></div>
                <div class="vertical-line"></div>
                <div class="form-input-wrapper">
                    <textarea rows="3" id="alasan" readonly></textarea>
                </div>
            </div>

            <label>
                <input type="checkbox" id="agreementCheckbox">
                Saya menyetujui semua syarat dan ketentuan adopsi.
            </label>

            <div class="submit-section">
                <button type="button" id="confirmButton" onclick="goToSuksesAdopsi()" disabled>Konfirmasi</button>
                <a href="#">Baca Syarat dan Ketentuan</a>
            </div>
        </form>
    </div>
</body>
</html>
