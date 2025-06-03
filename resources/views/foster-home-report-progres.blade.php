<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>laporan perkembangan - Naw's Patrol</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  @vite(['resources/css/foster-home-report-progres.css'],)
</head>
<body>

  <div class="container">
    <div class="loading" id="loading">
      <h3>Loading pet information...</h3>
      <p>Please wait while we fetch the details.</p>
    </div>

    <div class="content hide" id="content">
      <h1 class="page-title">Laporan Perkembangan Hewan</h1>

      <div class="warning-box">
        <div class="warning-icon">!</div>
        <div class="warning-text">
          Update secara berkala perkembangan hewan yang berada di Foster Home Anda.
        </div>
      </div>
      
      <div class="main-content">
        <div class="pet-card-section">
          <div class="pet-image" id="petImage">
            <div class="pet-name-overlay" id="petName">Loading...</div>
          </div>
        </div>

        <div class="pet-info-section">
          <div class="info-item">
            <div class="info-icon"><img src="{{ asset('image/foster-home/foster-name.svg') }}"></div>
            <div class="info-content">
              <div class="info-label">Nama Hewan</div>
              <div class="info-value" id="petNameInfo">Loading...</div>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon"><img src="{{ asset('image/foster-home/foster-jenis-kelamin.svg') }}"></div>
            <div class="info-content">
              <div class="info-label">Jenis Kelamin</div>
              <div class="info-value" id="petGender">Loading...</div>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon"><img src="{{ asset('image/foster-home/foster-usia.png') }}"></div>
            <div class="info-content">
              <div class="info-label">Umur</div>
              <div class="info-value" id="petAgeInfo">Loading...</div>
            </div>
          </div>
        </div>

        <div class="form-section">
          <form id="fosterForm">
            <div class="form-group">
              <input type="text" name="statusKesehatan" placeholder="Jelaskan status kesehatannya" required />
              <input type="date" name="tanggal" required />
              <input type="text" name="keterangan" placeholder="Keterangan" required />
              <input type="file" name="photos" id="photoInput" multiple accept="image/*" required />
            </div>
          </form>
        </div>

        <div class="form-actions">
          <button type="button" class="btn btn-primary" onclick="submitFosterApplication()">Laporkan Perkembangan</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    const allPetData = [
      { name: "Luna", breed: "Domestik", age: "2 Tahun", status: "Siap Adopsi", image: "/image/foster-home/landing-cat-image.jpg", gender: "Betina", description: "Kucing yang sangat ramah dan suka bermain" },
      { name: "Milo", breed: "Sphynx", age: "1 Tahun", status: "Siap Adopsi", image: "/image/foster-home/landing-cat-image-1.jpg", gender: "Jantan", description: "Kucing Sphynx yang aktif dan lucu" },
      { name: "Whiskers", breed: "Domestik", age: "4 bulan", status: "Siap Adopsi", image: "/image/foster-home/landing-cat-image-2.jpg", gender: "Jantan", description: "Anak kucing yang menggemaskan" },
      { name: "Buddy", breed: "Golden Retriever Mix", age: "2 Tahun", status: "Siap Adopsi", image: "/image/foster-home/landing-dog-image.jpg", gender: "Jantan", description: "Anjing yang loyal dan ramah keluarga" },
      { name: "Max", breed: "Labrador Mix", age: "1.5 Tahun", status: "Siap Adopsi", image: "/image/foster-home/landing-dog-image-1.jpg", gender: "Jantan", description: "Anjing energik yang suka bermain" },
      { name: "Bella", breed: "Husky Mix", age: "3 Tahun", status: "Siap Adopsi", image: "/image/foster-home/landing-dog-image-2.jpg", gender: "Betina", description: "Husky cantik dengan mata biru" },
      { name: "Sunny", breed: "Canary", age: "6 Bulan", status: "Siap Adopsi", image: "/image/foster-home/landing-bird-image.jpg", gender: "Jantan", description: "Burung kenari yang rajin berkicau" },
      { name: "Rainbow", breed: "Lovebird", age: "1 Tahun", status: "Siap Adopsi", image: "/image/foster-home/landing-bird-image-1.jpg", gender: "Betina", description: "Lovebird warna-warni yang cantik" },
      { name: "Kiwi", breed: "Cockatiel", age: "8 Bulan", status: "Siap Adopsi", image: "/image/foster-home/landing-bird-image-2.jpg", gender: "Jantan", description: "Cockatiel yang pandai meniru suara" },
      { name: "Snowball", breed: "Holland Lop", age: "1 Tahun", status: "Siap Adopsi", image: "/image/foster-home/landing-rabbit-image.jpg", gender: "Betina", description: "Kelinci putih dengan telinga lop" },
      { name: "Cocoa", breed: "Mini Rex", age: "6 Bulan", status: "Siap Adopsi", image: "/image/foster-home/landing-rabbit-image-1.jpg", gender: "Jantan", description: "Kelinci mini rex dengan bulu halus" },
      { name: "Marshmallow", breed: "Lionhead", age: "2 Tahun", status: "Siap Adopsi", image: "/image/foster-home/landing-rabbit-image-2.jpg", gender: "Betina", description: "Kelinci lionhead dengan 'surai' lucu" }
    ];

    function loadPetInfo() {
      const urlParams = new URLSearchParams(window.location.search);
      const petName = urlParams.get('pet');
      const selectedPet = allPetData.find(pet => pet.name === petName) || allPetData[0];

      document.getElementById("petImage").style.backgroundImage = `url('${selectedPet.image}')`;
      document.getElementById("petName").textContent = selectedPet.name;
      document.getElementById("petNameInfo").textContent = selectedPet.name;
      document.getElementById("petGender").textContent = selectedPet.gender;
      document.getElementById("petAgeInfo").textContent = selectedPet.age;

      document.getElementById("loading").style.display = "none";
      document.getElementById("content").style.display = "block";
    }

    function submitFosterApplication() {
      const form = document.getElementById("fosterForm");
      const photoInput = document.getElementById("photoInput");

      if (!form.checkValidity()) {
        alert("Harap lengkapi semua bagian formulir.");
        return;
      }

      if (!photoInput.files || photoInput.files.length < 3) {
        alert("Unggah minimal 3 foto hewan.");
        return;
      }

      alert("Terima kasih! Laporan perkembangan telah dikirim.");
      form.reset();
    }

    function cancelApplication() {
      if (confirm("Apakah Anda yakin ingin membatalkan pengisian formulir?")) {
        document.getElementById("fosterForm").reset();
      }
    }

    window.onload = () => {
      document.getElementById("loading").style.display = "block";
      document.getElementById("content").style.display = "none";
      setTimeout(() => {
        loadPetInfo();
      }, 1000);
    };
  </script>
</body>
</html>
