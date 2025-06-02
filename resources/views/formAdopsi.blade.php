<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Hewan</title>
  @vite(['resources/css/formAdopsi.css', 'resources/js/formAdopsi.js', 'resources/css/navbarWarna.css'])
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
  @include('navbar', ['active' => 'adopsi'])
  <div class="detail-container">
    <!-- Gambar utama -->
    <div class="main-image">
      <img id="petImage" src="{{ asset('img/kucing.jpeg') }}" alt="Pet Image" />
    </div>
  </div>

  <div class="stepper">
    <div class="step completed">
      <span class="checkmark">&#10003;</span>
    </div>
    <div class="line"></div>
    <div class="step active">
      <span class="number">2</span>
    </div>
    <div class="line"></div>
    <div class="step">
      <span class="number">3</span>
    </div>
  </div>

  <!-- Container Form -->
  <div class="form-container">
    <h2>Isi Formulir Pengajuan Adopsi</h2>
    <form>
      <div class="form-group">
        <div class="form-label-wrapper">
          <label>Nama Lengkap</label>
        </div>
        <div class="vertical-line"></div>
        <div class="form-input-wrapper">
          <input type="text" required />
        </div>
      </div>
      <div class="form-group">
        <div class="form-label-wrapper">
          <label>Umur</label>
        </div>
        <div class="vertical-line"></div>
        <div class="form-input-wrapper">
          <input type="number" required />
        </div>
      </div>
      <div class="form-group">
        <div class="form-label-wrapper">
          <label>Alamat</label>
        </div>
        <div class="vertical-line"></div>
        <div class="form-input-wrapper">
          <input type="text" required />
        </div>
      </div>
      <div class="form-group">
        <div class="form-label-wrapper">
          <label>Jenis Rumah</label>
        </div>
        <div class="vertical-line"></div>
        <div class="form-input-wrapper">
          <input type="text" required />
        </div>
      </div>
      <div class="form-group">
        <div class="form-label-wrapper">
          <label>Aktivitas Harian</label>
        </div>
        <div class="vertical-line"></div>
        <div class="form-input-wrapper">
          <input type="text" required />
        </div>
      </div>
      <div class="form-group">
        <div class="form-label-wrapper">
          <label>Alasan Adopsi</label>
        </div>
        <div class="vertical-line"></div>
        <div class="form-input-wrapper">
          <textarea rows="3" required></textarea>
        </div>
      </div>

      <div class="submit-section">
        <button type="button" id="submitButton" data-url="{{ route('konfirmasiAdopsi') }}">Ajukan Adopsi</button>
        <a href="#">Baca Syarat Dan Ketentuan</a>
      </div>
    </form>
  </div>
</body>

<script>
  const petImages = {
    "Daisy": "{{ asset('img/kucing.jpeg') }}",
    "Max": "{{ asset('img/max.png') }}",
    "Luna": "{{ asset('img/luna.png') }}"
  };
</script>

</html>
