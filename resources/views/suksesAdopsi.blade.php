<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pengajuan Berhasil</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            background-color: white;
            color: #f5a623;
            padding: 150px;
        }

        .check-icon {
            width: 250px;
            height: 250px;
            margin: 0 auto;
            padding-top: 50px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        .desc {
            font-size: 16px;
            margin-top: 10px;
            color: #FAAF32;
        }

        a {
            color: #FAAF32;
            display: block;
            margin-bottom: 30px;
            text-decoration: underline;
            text-align: left;
        }
    </style>
</head>

<body>
    <a href="{{ url('adopsi') }}">&lt; Kembali</a>
    <img src="{{ asset('img/ceklis.png') }}" alt="Berhasil" class="check-icon">
    <div class="title">Terima kasih atas pengajuan adopsi!</div>
    <div class="desc">
        Tim shelter kami akan menghubungi Anda dalam 1–3 hari kerja<br>
        untuk proses verifikasi lebih lanjut.
    </div>
</body>

</html>
