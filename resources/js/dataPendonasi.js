const provinsiSelect = document.getElementById("provinsi");
const kabupatenSelect = document.getElementById("kabupaten");

// Ambil semua provinsi
fetch("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json")
    .then(res => res.json())
    .then(data => {
        data.forEach(prov => {
            const option = document.createElement("option");
            option.value = prov.id;
            option.textContent = prov.name;
            provinsiSelect.appendChild(option);
        });
    })
    .catch(err => {
        alert("Gagal memuat data provinsi.");
        console.error(err);
    });

// Ambil kabupaten saat provinsi dipilih
provinsiSelect.addEventListener("change", function () {
    const provinsiId = this.value;
    kabupatenSelect.innerHTML = '<option value="">Memuat kabupaten...</option>';

    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsiId}.json`)
        .then(res => res.json())
        .then(data => {
            kabupatenSelect.innerHTML = '<option value="">Pilih Kabupaten/Kota</option>';
            data.forEach(kab => {
                const option = document.createElement("option");
                option.value = kab.id;
                option.textContent = kab.name;
                kabupatenSelect.appendChild(option);
            });
        })
        .catch(err => {
            alert("Gagal memuat kabupaten/kota.");
            console.error(err);
        });
});

// Ambil parameter URL
function getQueryParam(key) {
    const params = new URLSearchParams(window.location.search);
    return params.get(key) || '';
}

// Buat fungsi global supaya bisa dipanggil dari onsubmit inline
window.handleForm = function(e) {
    e.preventDefault();
    const amount = getQueryParam("amount") || "0";
    window.location.href = `/metode-donasi?amount=${amount}`;
};

