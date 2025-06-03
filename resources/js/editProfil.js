document.addEventListener("DOMContentLoaded", function() {
    // Tombol SIMPAN
    document.querySelector(".save").addEventListener("click", function () {
        const nama = document.getElementById("nama").value;
        const email = document.getElementById("email").value;
        const nomor = document.getElementById("nomor").value;
        const fotoInput = document.getElementById("fotoProfil");

        // Simpan teks ke localStorage
        localStorage.setItem("user_nama", nama);
        localStorage.setItem("user_email", email);
        localStorage.setItem("user_nomor", nomor);

        // Kalau user pilih gambar, ubah jadi base64 dan simpan juga
        if (fotoInput.files.length > 0) {
            const reader = new FileReader();
            reader.onload = function (e) {
                localStorage.setItem("user_foto", e.target.result);
                window.location.href = profilUrl;
            };
            reader.readAsDataURL(fotoInput.files[0]);
        } else {
            window.location.href = profilUrl;
        }
    });

    // Tombol BATAL
    document.querySelector(".cancel").addEventListener("click", function () {
       window.location.href = profilUrl;
    });
});
