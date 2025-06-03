<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulir Pemfosteran - Naw's Patrol</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  @vite(['resources/css/foster-home-form.css'],)
</head>
<body>

  <div class="container">
    <div class="loading" id="loading">
      <h3>Loading pet information...</h3>
      <p>Please wait while we fetch the details.</p>
    </div>

    <div class="content hide" id="content">
      <h1 class="page-title">Formulir Pemfosteran</h1>

      <div class="warning-box">
        <div class="warning-icon">!</div>
        <div class="warning-text">
          Jangan lupa untuk merawat sahabat anda, jangan sampai biarkan dia sakit, Update selalu status sahabat anda agar kami dapat memantau sahabat kita dari kejauhan.
        </div>
      </div>
      

      <div class="main-content">
        <div class="pet-card-section">
          <div class="pet-image" id="petImage">
            <div class="pet-name-overlay" id="petName">Loading...</div>
            <div class="health-status">
              Status Kesehatan
              <div class="health-percentage" id="healthStatus">90%</div>
            </div>
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
            <div class="info-icon"><img src="{{ asset('image/foster-home/foster-jenis.svg') }}"></div>
            <div class="info-content">
              <div class="info-label">Jenis & Ras</div>
              <div class="info-value" id="petBreedInfo">Loading...</div>
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

          <div class="info-item">
            <div class="info-icon"><img src="{{ asset('image/foster-home/foster-status.png') }}"></div>
            <div class="info-content">
              <div class="info-label">Status Kesehatan</div>
              <div class="info-value" id="petHealthInfo">Loading...</div>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon"><img src="{{ asset('image/foster-home/foster-deskripsi.svg') }}"></div>
            <div class="info-content">
              <div class="info-label">Deskripsi Singkat</div>
              <div class="info-value" id="petDescription">Loading...</div>
            </div>
          </div>
        </div>

        <div class="form-section">
          <form id="fosterForm">
            <div class="form-group">
              <input type="text" name="duration" placeholder="Estimasi Durasi Penampungan" required />
              <input type="text" name="location" placeholder="Lokasi Penampungan " required />
              <input type="text" name="notes" placeholder="Catatan Tambahan (opsional)" required />
            </div>

            <h3>Komitmen Foster</h3>
            <div class="checkbox-group">
              <div class="checkbox-item">
                <input type="checkbox" id="commit1" name="commitments" value="tempat" required />
                <label for="commit1">Saya bersedia memberikan tempat tinggal yang aman</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="commit2" name="commitments" value="laporan" required />
                <label for="commit2">Saya akan mengirim laporan perkembangan secara berkala</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="commit3" name="commitments" value="izin" required />
                <label for="commit3">Saya tidak akan memberikan hewan ini kepada pihak lain tanpa izin shelter</label>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="form-actions">
        <button type="button" class="btn btn-primary" onclick="submitFosterApplication()">Ajukan Sebagai Foster</button>
        <button type="button" class="btn btn-danger" onclick="cancelApplication()">Batalkan</button>
      </div>
    </div>
  </div>

  <script>
    const allPetData = [
        {
            name: "Luna",
            breed: "Domestik",
            age: "2 Tahun",
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-cat-image.jpg",
            gender: "Betina",
            health: "Sehat",
            description: "Kucing yang sangat ramah dan suka bermain"
        },
        {
            name: "Milo", 
            breed: "Sphynx",
            age: "1 Tahun",
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-cat-image-1.jpg",
            gender: "Jantan",
            health: "Sehat",
            description: "Kucing Sphynx yang aktif dan lucu"
        },
        {
            name: "Whiskers",
            breed: "Domestik",
            age: "4 bulan", 
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-cat-image-2.jpg",
            gender: "Jantan",
            health: "Sehat",
            description: "Anak kucing yang menggemaskan"
        },
        {
            name: "Buddy",
            breed: "Golden Retriever Mix", 
            age: "2 Tahun",
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-dog-image.jpg",
            gender: "Jantan",
            health: "Sehat",
            description: "Anjing yang loyal dan ramah keluarga"
        },
        {
            name: "Max",
            breed: "Labrador Mix",
            age: "1.5 Tahun",
            status: "Siap Adopsi", 
            image: "/image/foster-home/landing-dog-image-1.jpg",
            gender: "Jantan",
            health: "Sehat",
            description: "Anjing energik yang suka bermain"
        },
        {
            name: "Bella",
            breed: "Husky Mix",
            age: "3 Tahun",
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-dog-image-2.jpg",
            gender: "Betina",
            health: "Sehat",
            description: "Husky cantik dengan mata biru"
        },
        {
            name: "Sunny",
            breed: "Canary",
            age: "6 Bulan", 
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-bird-image.jpg",
            gender: "Jantan",
            health: "Sehat",
            description: "Burung kenari yang rajin berkicau"
        },
        {
            name: "Rainbow",
            breed: "Lovebird",
            age: "1 Tahun",
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-bird-image-1.jpg",
            gender: "Betina",
            health: "Sehat",
            description: "Lovebird warna-warni yang cantik"
        },
        {
            name: "Kiwi",
            breed: "Cockatiel",
            age: "8 Bulan",
            status: "Siap Adopsi", 
            image: "/image/foster-home/landing-bird-image-2.jpg",
            gender: "Jantan",
            health: "Sehat",
            description: "Cockatiel yang pandai meniru suara"
        },
        {
            name: "Snowball",
            breed: "Holland Lop",
            age: "1 Tahun",
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-rabbit-image.jpg",
            gender: "Betina",
            health: "Sehat",
            description: "Kelinci putih dengan telinga lop"
        },
        {
            name: "Cocoa", 
            breed: "Mini Rex",
            age: "6 Bulan",
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-rabbit-image-1.jpg",
            gender: "Jantan",
            health: "Sehat",
            description: "Kelinci mini rex dengan bulu halus"
        },
        {
            name: "Marshmallow",
            breed: "Lionhead",
            age: "2 Tahun",
            status: "Siap Adopsi",
            image: "/image/foster-home/landing-rabbit-image-2.jpg",
            gender: "Betina",
            health: "Sehat",
            description: "Kelinci lionhead dengan 'surai' lucu"
        }
    ];

    function loadPetInfo() {

      const urlParams = new URLSearchParams(window.location.search);
      const petName = urlParams.get('pet');
      console.log('Pet name from URL:', petName);

      let selectedPet = allPetData.find(pet => pet.name === petName);
      console.log('Found pet:', selectedPet);
      if (!selectedPet) {
        selectedPet = allPetData[0];
        console.log('Using default pet:', selectedPet);
      }
      document.getElementById("petImage").style.backgroundImage = `url('${selectedPet.image}')`;
      document.getElementById("petName").textContent = selectedPet.name;
      document.getElementById("petNameInfo").textContent = selectedPet.name;
      document.getElementById("petBreedInfo").textContent = selectedPet.breed;
      document.getElementById("petGender").textContent = selectedPet.gender;
      document.getElementById("petAgeInfo").textContent = selectedPet.age;
      document.getElementById("petHealthInfo").textContent = selectedPet.health;
      document.getElementById("petDescription").textContent = selectedPet.description;
      
      const healthValue = 90;
      document.getElementById("healthStatus").innerText = `${healthValue}%`;

      const healthElement = document.getElementById("healthStatus");

      const progressBarBg = document.createElement("div");
      progressBarBg.style.height = "8px";
      progressBarBg.style.background = "#eee";
      progressBarBg.style.borderRadius = "10px";
      progressBarBg.style.marginTop = "8px";
      progressBarBg.style.position = "relative";
      progressBarBg.style.overflow = "hidden";

      const progressBarFill = document.createElement("div");
      progressBarFill.style.width = `${healthValue}%`;
      progressBarFill.style.height = "8px";
      progressBarFill.style.background = "#FFB000";
      progressBarFill.style.borderRadius = "10px";
      progressBarFill.style.position = "absolute";
      progressBarFill.style.left = "0";
      progressBarFill.style.top = "0";

      progressBarBg.appendChild(progressBarFill);
      healthElement.appendChild(progressBarBg);

      document.getElementById("loading").classList.remove("show");
      document.getElementById("content").classList.remove("hide");
    }

    function submitFosterApplication() {
      const form = document.getElementById("fosterForm");
      if (!form.checkValidity()) {
        alert("Harap lengkapi semua bagian formulir dan centang komitmen foster.");
        return;
      }

      alert("Terima kasih! Formulir pemfosteran Anda telah dikirim.");
      form.reset();
    }

    function cancelApplication() {
      if (confirm("Apakah Anda yakin ingin membatalkan pengisian formulir?")) {
        document.getElementById("fosterForm").reset();
      }
    }

    window.onload = () => {
      document.getElementById("loading").classList.add("show");
      setTimeout(() => {
        loadPetInfo();
      }, 1000);
    };
  </script>
</body>
</html>