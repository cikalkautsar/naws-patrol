<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Naw's Patrol</title>
    @vite(['resources/css/foster-home-info.css'],)
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="title">Kelompok 6</div>
            <div class="description">Foster Home Information</div>
        </div>
    </header>

    <div class="profile-picture-container">
        <img src="" alt="" class="profile-picture" />
    </div>

    <main class="profile-container">
        <section class="user-info">
            <div class="info-item">
                <img src="{{ asset('image/foster-home/person.svg') }}" alt="User Icon" />
                <div>
                    <strong>Nama</strong><br />
                    <span id="user-name">Rumahsinggahkelompok6</span>
                </div>
            </div>
            <div class="info-item">
                <img src="{{ asset('image/foster-home/Calendar.svg') }}" alt="User Icon" />
                <div>
                    <strong>Bergabung Sejak</strong><br />
                    <span id="user-name">20 Mei 2024</span>
                </div>
            </div>
           <div class="info-item">
                <img src="{{ asset('image/foster-home/time.svg') }}" alt="User Icon" />
                <div>
                    <strong>Durasi Aktif</strong><br />
                    <span id="user-name">1 Tahun 2 Bulan</span>
                </div>
            </div>
            <div class="info-item">
                <img src="{{ asset('image/foster-home/foster-cat-hand.png') }}" alt="User Icon" />
                <div>
                    <strong>Jenis Hewan yang Bisa Ditampung</strong><br />
                    <span id="user-name">Kucing, anjing</span>
                </div>
            </div>
          
            </div>
        </section>


    <script>
            function goBack() {
         
            if (window.history.length > 1) {
                window.history.back();
            } else {
                 window.location.href = '/foster-home'; 
                alert('Tidak ada halaman sebelumnya untuk kembali');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const infoItems = document.querySelectorAll('.info-item');
            
            infoItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    item.style.transition = 'all 0.6s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, index * 150);
            });
        });
    </script>


</body>

</html>