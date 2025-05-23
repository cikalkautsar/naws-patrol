<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Donasi & Crowdfunding</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  @vite(['resources/css/donasi.css', 'resources/js/donasi.js'])
</head>
<body>
    @include('navbar')

  <div class="container">
    <h1>Donasi & Crowdfunding</h1>

    <div class="wrapper">
      <div class="card image-card">
        <img src="{{ asset('img/cuteanimals.png') }}" alt="Hewan donasi" />
      </div>

      <div class="card form-card">
        <h2><span class="highlight">Ayo</span> <span class="blue-text">Berdonasi</span></h2>
        <div class="nominal-buttons">
          <button onclick="setAmount(25000)">Rp25.000</button>
          <button onclick="setAmount(50000)">Rp50.000</button>
          <button onclick="setAmount(100000)">Rp100.000</button>
          <button onclick="setAmount(200000)">Rp200.000</button>
          <button onclick="setAmount(500000)">Rp500.000</button>
          <button onclick="setAmount(1000000)">Rp1.000.000</button>
          <div class="custom-amount">
            <input type="text" id="customAmount" placeholder="Rp. Nominal Lainnya">
          </div>
        </div>
        <button class="submit-btn" onclick="goToNext()">Lanjutkan</button>
      </div>
    </div>

    <div class="card transparency-card">
      <h2>Data Transparansi Dana</h2>
      <div class="transparency-grid">
        <div class="received">
          <p>Dana diterima</p>
          <div class="amount">
            <span class="plus"></span>
            <span class="value"></span>
          </div>
        </div>
        <div class="usage">
          <div class="usage-box"></div>
          <p class="usage-label">Penggunaan</p>
        </div>
      </div>
      <div class="thankyou-text">
        <p><em>Terimakasih Banyak atas donasi anda!</em></p>
        <p class="subtext">
          Bantuan anda sangat berarti bagi kami, dengan bantuan anda hewan-hewan yang ada semoga bisa menjadi lebih baik.
        </p>
      </div>
    </div>
  </div>
</body>
</html>
