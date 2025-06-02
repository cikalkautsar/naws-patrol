// resources/js/detailAdopsi.js
function applyAdoption() {
  const petName = document.getElementById('petName').textContent;
  window.location.href = `/form-adopsi?nama=${encodeURIComponent(petName)}`;
}

window.applyAdoption = applyAdoption;
