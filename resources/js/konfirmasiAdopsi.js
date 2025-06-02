const params = new URLSearchParams(window.location.search);

        const petName = params.get("nama");
        const userNama = params.get("user_nama");
        const userUmur = params.get("user_umur");
        const userAlamat = params.get("user_alamat");
        const userRumah = params.get("user_rumah");
        const userAktivitas = params.get("user_aktivitas");
        const userAlasan = params.get("user_alasan");

        const pets = {
            "Daisy": { image: "{{ asset('img/kucing.jpeg') }}" },
            "Max": { image: "{{ asset('img/max.png') }}" },
            "Luna": { image: "{{ asset('img/luna.png') }}" }
        };

        const pet = pets[petName];
        if (pet) {
            document.getElementById("petImage").src = pet.image;
        }

        document.getElementById("nama").value = userNama || "";
        document.getElementById("umur").value = userUmur || "";
        document.getElementById("alamat").value = userAlamat || "";
        document.getElementById("jenisRumah").value = userRumah || "";
        document.getElementById("aktivitas").value = userAktivitas || "";
        document.getElementById("alasan").value = userAlasan || "";

        const petDetails = {
            "Daisy": {
                image: "{{ asset('img/kucing.jpeg') }}",
                gender: "Betina",
                age: "2 Tahun"
            },
            "Max": {
                image: "{{ asset('img/max.png') }}",
                gender: "Jantan",
                age: "3 Tahun"
            },
            "Luna": {
                image: "{{ asset('img/luna.png') }}",
                gender: "Betina",
                age: "1.5 Tahun"
            }
        };

        const petDetail = petDetails[petName];
        if (petDetail) {
            document.getElementById("infoPetImage").src = petDetail.image;
            document.getElementById("infoPetName").textContent = petName;
            document.getElementById("infoPetGender").textContent = petDetail.gender;
            document.getElementById("infoPetAge").textContent = petDetail.age;
        }

        const checkbox = document.getElementById("agreementCheckbox");
const confirmButton = document.getElementById("confirmButton");

checkbox.addEventListener("change", () => {
    confirmButton.disabled = !checkbox.checked;
});

function goToSuksesAdopsi() {
    window.location.href = '/sukses-adopsi';
}

window.goToSuksesAdopsi = goToSuksesAdopsi;