<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  @vite(['resources/css/navbar.css', 'resources/js/navbar.js'])
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="nav-left">
      <button class="logo">Logo</button>
    </div>
  
    <div class="nav-center">
      <a href="#">Profile</a>
      <a href="#">Adopsi</a>
      <a href="#">Foster</a>
      <a href="#">Laporan Hewan Liar</a>
      <a href="{{ url('donasi') }}"
        class="{{ request()->is('donasi') || request()->is('data-pendonasi') || request()->is('metode-donasi') || request()->is('pembayaran-donasi') || request()->is('qr-code') ? 'active' : '' }}">
        Donasi & Crowdfunding
</a>

      <a href="#">Edukasi</a>
    </div>
  
    <div class="nav-right">
      <button class="user">user</button>
    </div>
  </nav>
</body>
</html>