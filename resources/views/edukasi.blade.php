<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edukasi</title>
  <link rel="stylesheet" href="{{ asset('css/edukasi.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <header class="navbar">
    <nav>
      <ul>
        <li><a href="">Profile</a></li>
        <li><a href="">Adopsi</a></li>
        <li><a href="register-foster.html">Foster</a></li>
        <li><a href="LaporHewan.html">Laporan Hewan Liar</a></li>
        <li><a href="" class=" ">Donasi & Crowdfunding</a></li>
        <li><a href="edukasi.html" class="active">edukasi</a></li>
      </ul>
    </nav>
  </header>

  <main class="edukasi-section" id="landing-page">
    <section class="hero">
      <div class="hero-text">
        <h1>Rawat peliharaanmu dengan penuh cinta!</h1>
        <p>Panduan simpel biar hewan peliharaan tetap sehat, aktif, dan bahagia.</p>
        <a href="#tips-section" class="btn-tips" onclick="scrollToTips()">Yuk, Cek Tipsnya!</a>
      </div>
      <div class="hero-img">
        <img src="{{ asset('image/edu-foto.png') }}" alt="Perempuan dengan kucing" />
      </div>
    </section>
  
    <section class="card-container" id="tips-section">
      <div class="card">
        <img src="{{ asset('image/edu-foto-dog.png') }}" alt="Memandikan anjing" />
        <h3>Cara memandikan anjing yang takut air dengan mudah!</h3>
        <a href="#" class="read-more" onclick="showTips('memandikan-anjing')">Selengkapnya <i class="fa-solid fa-circle-arrow-right"></i></a>
      </div>
      <div class="card">
        <img src="{{ asset('image/edu-foto-cat.png') }}"alt="Kucing stres" />
        <h3>Ketahui ini 10 ciri bahwa anabul mu sedang mengalami stress!</h3>
        <a href="#" class="read-more" onclick="showTips('kucing-stress')">Selengkapnya <i class="fa-solid fa-circle-arrow-right"></i></a>
      </div>
      <div class="card">
        <img src="{{ asset('image/edu-foto-bird.png') }}" alt="Burung sakit" />
        <h3>Tanda-Tanda Burung Kamu Sakit dan Cara Mengatasinya</h3>
        <a href="#" class="read-more" onclick="showTips('burung-sakit')">Selengkapnya <i class="fa-solid fa-circle-arrow-right"></i></a>
      </div>
    </section>
  </main>

  <main class="tips-detail-section" id="tips-page" style="display: none;">
    <div class="tips-container">

      <div class="back-button">
        <button onclick="showLanding()" class="btn-back">
          <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
        </button>
      </div>

      <article class="tips-content">
        <div class="tips-header">
          <img id="tips-image" src="" alt="" class="tips-main-image">
          <div class="tips-meta">
            <span class="tips-category" id="tips-category"></span>
            <h1 class="tips-title" id="tips-title"></h1>
            <div class="tips-info">
              <span class="tips-author" id="tips-author"></span>
              <span class="tips-date" id="tips-date"></span>
              <span class="tips-read-time" id="tips-read-time"></span>
            </div>
          </div>
        </div>

        <div class="tips-body">
          <p class="tips-intro" id="tips-intro"></p>
          
          <div class="tips-sections" id="tips-sections">
          
          </div>

          <div class="tips-list" id="tips-list">
            <h3>Tips Penting:</h3>
            <ul id="tips-points">
           
            </ul>
          </div>

          <div class="tips-conclusion">
            <h3>Kesimpulan</h3>
            <p id="tips-conclusion-text"></p>
          </div>
        </div>
      </article>
    </div>
  </main>


  <script>
    
    const tipsData = {
      "memandikan-anjing": {
        id: "memandikan-anjing",
        title: "Cara Memandikan Anjing yang Takut Air dengan Mudah!",
        image: "image/edu-foto-dog.png",
        category: "Perawatan Anjing",
        readTime: "5 menit",
        author: "Dr. Hewan",
        publishDate: "20 Mei 2024",
        content: {
          intro: "Memandikan anjing yang takut air memang tantangan tersendiri. Namun dengan teknik yang tepat, Anda bisa membuatnya menjadi pengalaman yang menyenangkan.",
          sections: [
            {
              heading: "Persiapan Sebelum Memandikan",
              content: "Sebelum memulai, pastikan Anda telah menyiapkan semua perlengkapan yang dibutuhkan. Siapkan handuk, shampo khusus anjing, dan mainan favorit anjing Anda."
            },
            {
              heading: "Langkah-langkah Memandikan",
              content: "Mulai dengan air hangat suam-suam kuku. Basahi perlahan mulai dari kaki, lalu naik ke tubuh. Hindari area kepala terlebih dahulu sampai anjing terbiasa."
            },
            {
              heading: "Tips Mengatasi Ketakutan",
              content: "Gunakan mainan atau treat untuk mengalihkan perhatian. Bicara dengan suara lembut dan berikan pujian ketika anjing bersikap tenang."
            },
            {
              heading: "Setelah Memandikan",
              content: "Keringkan dengan handuk secara perlahan. Anda juga bisa menggunakan hair dryer dengan suhu rendah jika anjing sudah terbiasa."
            }
          ],
          tips: [
            "Jangan memaksa anjing jika terlalu stres",
            "Gunakan shampo khusus anjing, bukan shampo manusia",
            "Mandikan anjing 2-4 minggu sekali, atau sesuai kebutuhan",
            "Berikan reward setelah selesai memandikan"
          ],
          conclusion: "Dengan kesabaran dan teknik yang tepat, memandikan anjing yang takut air bisa menjadi rutinitas yang menyenangkan untuk Anda dan hewan kesayangan."
        }
      },
      
      "kucing-stress": {
        id: "kucing-stress",
        title: "Ketahui Ini 10 Ciri Bahwa Anabul Mu Sedang Mengalami Stress!",
        image: "image/edu-foto-cat.png",
        category: "Kesehatan Kucing",
        readTime: "7 menit",
        author: "Dr. Hewan",
        publishDate: "18 Mei 2024",
        content: {
          intro: "Kucing adalah hewan yang sensitif terhadap perubahan lingkungan. Mengenali tanda-tanda stress pada kucing sangat penting untuk menjaga kesehatan mental dan fisik mereka.",
          sections: [
            {
              heading: "Perubahan Perilaku Makan",
              content: "Kucing yang stress biasanya akan mengalami perubahan nafsu makan. Mereka bisa menjadi tidak mau makan sama sekali atau malah makan berlebihan."
            },
            {
              heading: "Perilaku Buang Air",
              content: "Salah satu tanda stress yang paling jelas adalah ketika kucing buang air di luar kotak pasir. Ini bisa terjadi meski kotak pasir dalam keadaan bersih."
            },
            {
              heading: "Perubahan Aktivitas",
              content: "Kucing stress mungkin menjadi terlalu aktif atau sebaliknya, menjadi sangat malas dan banyak tidur. Mereka juga mungkin bersembunyi lebih sering."
            },
            {
              heading: "Tanda-tanda Fisik",
              content: "Beberapa kucing menunjukkan stress melalui over-grooming (menjilat berlebihan) atau sebaliknya, tidak merawat diri sama sekali."
            }
          ],
          tips: [
            "Jaga rutinitas harian kucing tetap konsisten",
            "Sediakan tempat bersembunyi yang aman",
            "Gunakan pheromone calming spray jika perlu",
            "Hindari perubahan mendadak di lingkungan kucing",
            "Berikan perhatian ekstra namun jangan memaksa",
            "Konsultasi ke dokter hewan jika stress berlanjut",
            "Pastikan kucing memiliki mainan yang cukup",
            "Ciptakan lingkungan yang tenang dan nyaman",
            "Berikan makanan di tempat yang sama setiap hari",
            "Perhatikan interaksi dengan hewan lain di rumah"
          ],
          conclusion: "Mengenali dan mengatasi stress pada kucing dengan cepat akan membantu menjaga kesehatan dan kebahagiaan hewan kesayangan Anda."
        }
      },

      "burung-sakit": {
        id: "burung-sakit",
        title: "Tanda-Tanda Burung Kamu Sakit dan Cara Mengatasinya",
        image: "image/edu-foto-bird.png",
        category: "Kesehatan Burung",
        readTime: "6 menit",
        author: "Dr. Hewan",
        publishDate: "15 Mei 2024",
        content: {
          intro: "Burung adalah hewan yang pandai menyembunyikan rasa sakit. Sebagai pemilik, penting untuk mengetahui tanda-tanda awal ketika burung sedang tidak sehat.",
          sections: [
            {
              heading: "Perubahan Perilaku",
              content: "Burung yang sakit biasanya akan terlihat lesu, kurang aktif, dan lebih banyak diam. Mereka mungkin juga tidak berkicau seperti biasanya."
            },
            {
              heading: "Tanda-tanda Fisik",
              content: "Perhatikan perubahan pada bulu, mata, dan paruh. Bulu yang kusam, mata yang berair, atau paruh yang kotor bisa menjadi indikasi penyakit."
            },
            {
              heading: "Perubahan Pola Makan",
              content: "Burung yang sakit biasanya akan mengurangi asupan makanan dan air. Perhatikan juga perubahan pada kotoran burung."
            },
            {
              heading: "Cara Penanganan Awal",
              content: "Jika menemukan tanda-tanda sakit, segera pisahkan burung dari burung lain, berikan kehangatan ekstra, dan konsultasi ke dokter hewan."
            }
          ],
          tips: [
            "Lakukan pemeriksaan rutin pada burung setiap hari",
            "Jaga kebersihan kandang dan peralatan makan",
            "Berikan makanan bergizi dan air bersih",
            "Hindari perubahan suhu yang drastis",
            "Segera konsultasi ke dokter hewan jika ada tanda-tanda sakit",
            "Isolasi burung yang sakit dari burung lain",
            "Berikan kehangatan ekstra dengan lampu infrared jika perlu"
          ],
          conclusion: "Deteksi dini dan penanganan yang tepat adalah kunci untuk menjaga kesehatan burung kesayangan Anda."
        }
      }
    };

    
    function getTipsById(id) {
      return tipsData[id] || null;
    }

    function showTips(tipsId) {
      const tips = getTipsById(tipsId);
      if (!tips) return;

      document.body.classList.add('hide-navbar');
      document.getElementById('landing-page').style.display = 'none';
      document.getElementById('tips-page').style.display = 'block';

      document.getElementById('tips-image').src = tips.image;
      document.getElementById('tips-image').alt = tips.title;
      document.getElementById('tips-category').textContent = tips.category;
      document.getElementById('tips-title').textContent = tips.title;
      document.getElementById('tips-author').textContent = tips.author;
      document.getElementById('tips-date').textContent = tips.publishDate;
      document.getElementById('tips-read-time').textContent = tips.readTime + ' baca';
      document.getElementById('tips-intro').textContent = tips.content.intro;
      document.getElementById('tips-conclusion-text').textContent = tips.content.conclusion;

      const sectionsContainer = document.getElementById('tips-sections');
      sectionsContainer.innerHTML = '';
      tips.content.sections.forEach(function(section) {
        const sectionDiv = document.createElement('div');
        sectionDiv.className = 'tips-section';
        sectionDiv.innerHTML = '<h3>' + section.heading + '</h3><p>' + section.content + '</p>';
        sectionsContainer.appendChild(sectionDiv);
      });

      const tipsPointsContainer = document.getElementById('tips-points');
      tipsPointsContainer.innerHTML = '';
      tips.content.tips.forEach(function(tip) {
        const li = document.createElement('li');
        li.textContent = tip;
        tipsPointsContainer.appendChild(li);
      });

      window.scrollTo(0, 0);
    }

    function showLanding() {
      document.getElementById('landing-page').style.display = 'block';
      document.getElementById('tips-page').style.display = 'none';
      window.scrollTo(0, 0);
    }

    function scrollToTips() {
    const tipsSection = document.getElementById('tips-section');
    const offsetTop = tipsSection.offsetTop - 20; 
    
    window.scrollTo({
        top: offsetTop,
        behavior: 'smooth'
    });
    }
  </script>
</body>
</html>