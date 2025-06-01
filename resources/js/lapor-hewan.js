

document.addEventListener('DOMContentLoaded', function() {

  if (document.getElementById('lokasi')) {
    initReportPage();
  }
});

function initReportPage() {

  document.getElementById("lokasi").addEventListener("click", handleLocation);
  
  document.getElementById("uploadFoto").addEventListener("change", handlePhotoUpload);
  
  document.querySelector('form').addEventListener('submit', handleFormSubmission);
}

function handleLocation(e) {
  e.preventDefault();
  
  if (!navigator.geolocation) {
    showAlert("Browser tidak mendukung geolocation.", "error");
    return;
  }
  
  showAlert("Mengambil lokasi...", "info");
  
  navigator.geolocation.getCurrentPosition(
    function(pos) {
      const lat = pos.coords.latitude;
      const lon = pos.coords.longitude;
      const link = `https://maps.google.com/?q=${lat},${lon}`;
      
      document.getElementById("lokasiValue").value = link;
      document.getElementById("lokasi").textContent = "Lokasi tersimpan!";
      showAlert("Lokasi berhasil disimpan", "success");
    },
    function(error) {
      const errorMessages = {
        1: "Izin lokasi ditolak",
        2: "Informasi lokasi tidak tersedia",
        3: "Waktu permintaan habis"
      };
      showAlert(errorMessages[error.code] || "Gagal mengambil lokasi", "error");
    }
  );
}

function handlePhotoUpload(e) {
  const file = e.target.files[0];
  if (!file) return;

  if (!file.type.match('image.*')) {
    showAlert("Hanya file gambar yang diperbolehkan", "error");
    return;
  }

  const reader = new FileReader();
  reader.onload = function(event) {
    document.getElementById('previewFoto').src = event.target.result;
  };
  reader.readAsDataURL(file);
}

async function handleFormSubmission(e) {
  e.preventDefault();
  
  const form = e.target;
  const formData = {
    nama: form.nama.value.trim(),
    telepon: form.telepon.value.trim(),
    alamat: form.alamat.value.trim(),
    alasan: form.alasan.value.trim(),
    lokasi: document.getElementById('lokasiValue').value,
    foto: document.getElementById('previewFoto').src,
    tanggal: new Date().toISOString()
  };

  if (!formData.lokasi) {
    showAlert("Silakan ambil lokasi terlebih dahulu", "error");
    return;
  }

  if (!formData.nama || !formData.telepon || !formData.alasan) {
    showAlert("Harap isi semua field yang wajib diisi", "error");
    return;
  }

  try {

    await saveReportToAPI(formData);

    saveReportToLocalStorage(formData);
 
    form.reset();
    document.getElementById('previewFoto').src = "https://img.icons8.com/ios/100/camera--v1.png";
    document.getElementById("lokasi").textContent = "KLIK UNTUK LOKASI";
    
    showAlert("Laporan berhasil disimpan ke server!", "success");
  } catch (error) {

    saveReportToLocalStorage(formData);
    showAlert("Laporan disimpan secara lokal", "warning");
  }
}

async function saveReportToAPI(reportData) {
  try {
    const response = await fetch(`${API_URL}/laporan`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(reportData)
    });
    
    if (!response.ok) {
      throw new Error('Failed to save report');
    }
    
    const data = await response.json();
    console.log('Report saved to API:', data);
    return data;
  } catch (error) {
    console.error('Error saving to API:', error);
    throw error;
  }
}

function saveReportToLocalStorage(reportData) {
  try {
    const reports = JSON.parse(localStorage.getItem('wildlifeReports') || '[]');
    reports.push(reportData);
    localStorage.setItem('wildlifeReports', JSON.stringify(reports));
    console.log("Report saved to localStorage:", reportData);
  } catch (error) {
    console.error("Error saving to localStorage:", error);
    showAlert("Gagal menyimpan laporan secara lokal", "error");
  }
}

async function getAllReports() {
  try {
    const response = await fetch(`${API_URL}/laporan`);
    if (!response.ok) {
      throw new Error('Failed to fetch reports');
    }
    const data = await response.json();
    console.log('All reports:', data);
    return data;
  } catch (error) {
    console.error('Error fetching reports:', error);

    return JSON.parse(localStorage.getItem('wildlifeReports') || '[]');
  }
}

function showAlert(message, type = "info") {

  const existingAlert = document.querySelector('.custom-alert');
  if (existingAlert) {
    existingAlert.remove();
  }

  const alert = document.createElement('div');
  alert.className = `custom-alert ${type}`;
  alert.textContent = message;

  document.body.appendChild(alert);
  
  setTimeout(() => alert.remove(), 3000);
}


function toggleSwitch() {
  console.log("Login function called");

}

