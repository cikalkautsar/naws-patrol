<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi & Crowdfunding</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    @vite(['resources/css/metodeDonasi.css', 'resources/js/metodeDonasi.js', 'resources/css/navbarWarna.css'])
</head>

<body>
    @include('navbar', ['active' => 'donasi'])
    <div class="container">
        <h1>Donasi & Crowdfunding</h1>
        <div class="wrapper">
            <div class="card image-card">
                <img src="{{ asset('img/cuteanimals.png') }}" alt="Hewan donasi" />
            </div>
            <div class="card payment-card">
                <h2><span class="highlight-orange">Ayo</span> <span class="highlight-blue">Berdonasi</span></h2>

                <div class="select-group">
                    <div class="select-wrapper">
                        <select id="bankSelect">
                            <option>Bank</option>
                            <option>BRI</option>
                            <option>BCA</option>
                            <option>BNI</option>
                            <option>Mandiri</option>
                        </select>
                    </div>

                    <div class="select-wrapper">
                        <select id="ewalletSelect">
                            <option>E-Wallet</option>
                            <option>DANA</option>
                            <option>OVO</option>
                            <option>GoPay</option>
                            <option>Shopeepay</option>
                        </select>
                    </div>
                </div>

                <button class="submit-btn" id="submitBtn">Pilih metode pembayaran terlebih dahulu</button>
            </div>
        </div>
    </div>
</body>
</html>
