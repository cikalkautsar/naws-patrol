<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QR Code</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  @vite(['resources/css/qrDonasi.css', 'resources/js/qrDonasi.js', 'resources/css/navbarWarna.css'])
</head>

<body>
  @include('navbar', ['active' => 'donasi'])
  <div class="container">
    <h1>Donasi & Crowdfunding</h1>
    <div class="wrapper">
      <div class="card image-card">
        <img src="{{ asset('img/cuteanimals.png') }}" alt="Gambar Hewan" />
      </div>

      <div class="card qr-card">
        <img id="qrImage" src="" alt="QR Code" />
        <br />
        <a id="backButton" class="btn" href="#">Kembali</a>
      </div>
    </div>
  </div>
</body>
</html>
