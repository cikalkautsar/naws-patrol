const namaHewan = localStorage.getItem("namaHewan");

        if (namaHewan) {
            // Ganti teks pada label dan alt gambar
            document.querySelector('.label').textContent = namaHewan;
            document.querySelector('.card img').alt = namaHewan;
        }

        function calculateHealthPercentage(nafsu, aktivitas, perilaku, gejala, obat) {
            let score = 0;

            score += (nafsu / 2) * 100;
            score += (aktivitas / 2) * 100;
            score += ((3 - perilaku) / 3) * 100;

            score += (gejala.trim() === "" ? 100 : 50);

            if (obat == 0) score += 100;
            else if (obat == 2) score += 50;
            else score += 0;

            let average = score / 5;

            return Math.round(average);
        }

        window.submitStatus = function () {
            const nafsu = document.getElementById('nafsu').value;
            const aktivitas = document.getElementById('aktivitas').value;
            const perilaku = document.getElementById('perilaku').value;
            const gejala = document.getElementById('gejala').value;
            const obat = document.getElementById('obat').value;

            const status = {
                nafsu,
                aktivitas,
                perilaku,
                gejala,
                obat
            };

            console.log("Status sahabatmu:", status);

            const healthPercent = calculateHealthPercentage(nafsu, aktivitas, perilaku, gejala, obat);

            // Update tampilan health percentage di card
            const healthText = document.querySelector('.health-percentage');
            const healthBarInner = document.querySelector('.health-bar-inner');
            healthText.textContent = healthPercent + '%';
            healthBarInner.style.width = healthPercent + '%';

            // Sembunyikan form
            document.querySelector('.update-status').style.display = 'none';

            // Tampilkan konten setelah submit
            document.getElementById('after-submit').style.display = 'block';
        }