<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Adopsi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    @vite(['resources/css/detailSuksesAdopsi.css', 'resources/js/detailSuksesAdopsi.js'])
</head>

<body>

    <a href="#">&lt; Kembali</a>
    <div class="title">Detail Adopsi</div>

    <div class="alert">
        <span>!</span>
        <span>Jangan lupa untuk merawat sahabat anda, jangan sampai biarkan dia sakit. Update selalu status sahabat anda
            agar kami dapat memantau sahabat kita dari kejauhan</span>
    </div>

    <div class="content">
        <!-- Kartu Kucing -->
        <!-- Kartu Kucing -->
        <div class="card">
            <img src="img/kucing.jpeg" alt="Kucing">
            <div class="label">Daisy</div>
            <div class="icon">🐾</div>

            <!-- Tambahkan overlay bagian bawah -->
            <div class="bottom-overlay">
                <div class="health-status">
                    <div>Status Kesehatan</div>
                    <div class="health-percentage">90%</div>
                    <div class="health-bar">
                        <div class="health-bar-inner"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Informasi Detail -->
        <div class="info">
            <div class="floating-icon">⚙️</div>
            <table>
                <tr>
                    <td>Nomor ID adopsi</td>
                    <td class="data">CAT00213Y61G</td>
                </tr>
                <tr>
                    <td>Umur saat diadopsi</td>
                    <td class="data">2 Tahun</td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td class="data">Betina</td>
                </tr>
                <tr>
                    <td>Tanggal adopsi</td>
                    <td class="data">14/07/2025</td>
                </tr>
                <tr>
                    <td>Riwayat vaksinasi</td>
                    <td class="data">
                        <div class="flex-row">
                            <div class="checkbox-label"><input type="checkbox" checked disabled><span
                                    class="text-orange">Penyakit Kucing</span></div>
                            <div class="checkbox-label"><input type="checkbox" checked disabled><span
                                    class="text-orange">Penyakit Kucing</span></div>
                            <div class="checkbox-label"><input type="checkbox" checked disabled><span
                                    class="text-orange">Penyakit Kucing</span></div>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>Jenis Makanan</td>
                    <td class="data">
                        <div class="flex-row">
                            <div class="food-item"><span class="food-dot dot-pink"></span> Makanan Kucing</div>
                            <div class="food-item"><span class="food-dot dot-green"></span> Makanan Kucing</div>
                            <div class="food-item"><span class="food-dot dot-purple"></span> Makanan Kucing</div>
                            <div class="food-item"><span class="food-dot dot-cyan"></span> Makanan Kucing</div>
                        </div>
                    </td>

                </tr>
            </table>
        </div>
    </div>

    <!-- Update Status Section -->
    <div class="update-status">
        <h2>Update Status</h2>
        <p style="font-size: 0.9rem; margin-top: -10px;">
            Beritahu kami mengenai kesehatan sahabatmu, dan kami akan memberikan rekomendasi untukmu.
        </p>

        <label for="nafsu">Nafsu Makan</label>
        <input type="range" id="nafsu" min="0" max="2" value="1">
        <div class="range-labels">
            <span>Kurang</span><span>Normal</span><span>Bagus</span>
        </div>

        <label for="aktivitas">Aktivitas</label>
        <input type="range" id="aktivitas" min="0" max="2" value="1">
        <div class="range-labels">
            <span>Lesu</span><span>Biasa Saja</span><span>Aktif</span>
        </div>

        <label for="perilaku">Perubahan Perilaku</label>
        <input type="range" id="perilaku" min="0" max="3" value="0">
        <div class="range-labels">
            <span>Tidak Ada</span><span>Rewel</span><span>Agresif</span><span>Manja</span>
        </div>

        <label for="gejala">Gejala Sakit?</label>
        <div class="gejala-container">
            <input type="text" id="gejala" placeholder="Contoh: batuk, flu, muntah">
        </div>

        <label for="obat">Konsumsi Obat/Vitamin</label>
        <input type="range" id="obat" min="0" max="2" value="2">
        <div class="range-labels">
            <span>Ya</span><span>Tidak sama sekali</span><span>Belum</span>
        </div>

        <label>Upload Foto/Video Peliharaanmu</label>
        <div class="upload-container">
            <div class="upload-box">
                <img src="https://img.icons8.com/ios/50/image.png" alt="upload">
                <input type="file" accept="image/*,video/*">
            </div>
            <div class="upload-box">
                <img src="https://img.icons8.com/ios/50/image.png" alt="upload">
                <input type="file" accept="image/*,video/*">
            </div>
            <div class="upload-box">
                <img src="https://img.icons8.com/ios/50/image.png" alt="upload">
                <input type="file" accept="image/*,video/*">
            </div>
            <div class="upload-box">
                <img src="https://img.icons8.com/ios/50/image.png" alt="upload">
                <input type="file" accept="image/*,video/*">
            </div>
        </div>

        <div class="update-button">
            <button onclick="submitStatus()">Update Status</button>
        </div>
    </div>

    <div id="after-submit" style="display: none; margin-top: 3rem;">
        <div style="background: #FAAF32; color: white; padding: 2rem; border-radius: 20px; position: relative;">
            <div style="text-align: center;">
                <img src="img/ceklis.png" alt="Ceklis" onerror="this.alt='Gambar tidak ditemukan'" width="100">
                <h3>Terima kasih telah update status peliharaan anda!</h3>
                <p style="margin-top: 10px;">
                    Kami akan memproses terlebih dahulu untuk kesehatan peliharaan anda<br>
                    dan memberikan rekomendasi yang sesuai untuk peliharaan anda
                </p>
            </div>
        </div>

        <div
            style="border: 2px solid #FAAF32; border-radius: 15px; margin-top: 2rem; padding: 1.5rem; position: relative;">
            <h3 style="color: #FAAF32; margin-bottom: 10px;">Rekomendasi dari shelter</h3>
            <p style="font-size: 0.9rem; color: #555;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
            </p>
        </div>
    </div>
    @vite(['resources/css/detailSuksesAdopsi.css', 'resources/js/detailSuksesAdopsi.js'])
</body>

</html>