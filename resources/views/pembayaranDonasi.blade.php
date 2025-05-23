<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Instruksi Pembayaran</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  @vite(['resources/css/pembayaranDonasi.css', 'resources/js/pembayaranDonasi.js'])
</head>

<body>
  @include('navbar', ['active' => 'donasi'])
  <div class="container">
    <h1>Donasi & Crowdfunding</h1>
    <div class="wrapper">
      <!-- Gambar Pet -->
      <div class="card image-card">
        <img src="{{ asset('img/cuteanimals.png') }}" alt="Hewan donasi" />
      </div>

      <!-- Instruksi Pembayaran -->
      <div class="card payment-card" id="paymentInstruction">
        <h2 class="highlight-orange">Instruksi Pembayaran</h2>
        <p><strong>Metode Pembayaran:</strong> <span id="paymentMethodText"></span></p>
        <p><strong>Nama Penerima:</strong> Yayasan Naw's Patrol</p>
        <p><strong>Nomor Rekening:</strong> <span id="accountNumber"></span></p>
        <p><strong>QR Code:</strong> <button class="qr-btn" id="showQRBtn">QR Code Image</button></p>
        <p><strong>Nominal Donasi:</strong> Rp <span id="donationAmount"></span></p>
        <p><strong>Batas Waktu Bayar:</strong> <span id="deadline"></span></p>
        <hr class="section-divider" />
        <p><strong>Petunjuk:</strong></p>
        <ul id="paymentInstructionsList"></ul>

        <div class="button-group">
          <a href="#" id="confirmPaymentBtn">Konfirmasi Pembayaran</a>
          <a href="{{ url('/donasi') }}">Kembali ke Beranda</a>
        </div>
      </div>

      <!-- Pesan Sukses -->
      <div class="card success-card" id="successMessage" style="display: none;">
        <h2 class="highlight-orange">Pembayaran Berhasil!</h2>
        <p style="color: #FAAF32;">Terima kasih, donasi Anda sebesar Rp <span id="finalAmount"></span> telah diterima.</p>
        <p style="color: #FAAF32;">Bantuan anda sangat berarti bagi kami, semoga hewan-hewan bisa menjadi lebih baik.</p>
        <p style="margin-top: 20px;"><strong>Kode Transaksi:</strong> <span id="transactionCode"></span></p>
        <p><strong>Tanggal:</strong> <span id="transactionDate"></span></p>
        <button id="backBtn" class="back-btn">Kembali ke Beranda</button>
      </div>
    </div>
  </div>
</body>

</html>
