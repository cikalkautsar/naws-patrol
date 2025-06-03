<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Naw's Patrol</title>
    <link rel="stylesheet" href="{{ asset('profil.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    @vite(['resources/css/profil.css'])
</head>

<body>
    <header>
        <div class="container">
            <div class="title">Naw’s Patrol</div>
            <p class="description">
                A system designed to address the issue of stray animals in Indonesia<br />
                especially cats and dogs.
            </p>
        </div>
    </header>

    <div class="profile-picture-container">
        <img id="profile-picture" src="{{ session('user_foto', asset('img/kucing.jpeg')) }}" alt="Profile Picture" class="profile-picture" />
    </div>

    <main class="profile-container">
        <section class="user-info">
            <div class="info-item">
                <img src="{{ asset('img/person.png') }}" alt="User Icon" />
                <div>
                    <strong>Nama</strong><br />
                    <span id="user-name">{{ session('user_nama', 'Kelompok6') }}</span>
                </div>
            </div>
            <div class="info-item">
                <img src="{{ asset('img/email.png') }}" alt="Email Icon" />
                <div>
                    <strong>Email</strong><br />
                    <span id="user-email">{{ session('user_email', 'kelompok6@gmail.com') }}</span>
                </div>
            </div>
            <div class="info-item">
                <img src="{{ asset('img/Phone.png') }}" alt="Phone Icon" />
                <div>
                    <strong>Telepon</strong><br />
                    <span id="user-phone">{{ session('user_nomor', '085798806874') }}</span>
                </div>
            </div>
        </section>

        <h2 class="report-title">My Report</h2>

        <section class="report-cards">
            <div class="card">
                <div class="icon-box">
                    <img src="{{ asset('img/report.png') }}" />
                </div>
                <div>
                    <strong>Report Submitted</strong><br />
                    <span id="report-count">{{ $reports ?? 0 }}</span>
                </div>
            </div>
            <div class="card yellow">
                <div class="icon-box">
                    <img src="{{ asset('img/namahewan.png') }}" />
                </div>
                <div>
                    <strong>Fostered</strong><br />
                    <span id="foster-count">{{ $fostered ?? 0 }}</span>
                </div>
            </div>
            <div class="card yellow">
                <div class="icon-box">
                    <img src="{{ asset('img/totaldonasi.png') }}" />
                </div>
                <div>
                    <strong>Total Donations</strong><br />
                    <span id="donation-total">Rp. {{ number_format($donation ?? 0, 2, ',', '.') }}</span>
                </div>
            </div>
        </section>

        <section class="button-row">
            <a href="{{ url('profil/edit') }}" class="settings-btn" style="text-decoration: none;">
                Settings
                <img src="{{ asset('img/settings.png') }}" alt="Settings Icon" class="btn-icon right" />
            </a>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" class="logout-btn">
                    Log out
                    <img src="{{ asset('img/logout.png') }}" alt="Logout Icon" class="btn-icon right" />
                </button>
            </form>
        </section>
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const nama = localStorage.getItem("user_nama");
        const email = localStorage.getItem("user_email");
        const nomor = localStorage.getItem("user_nomor");
        const foto = localStorage.getItem("user_foto");

        if (nama) document.getElementById("user-name").textContent = nama;
        if (email) document.getElementById("user-email").textContent = email;
        if (nomor) document.getElementById("user-phone").textContent = nomor;
        if (foto) document.getElementById("profile-picture").src = foto;
    });
</script>

</body>

</html>
