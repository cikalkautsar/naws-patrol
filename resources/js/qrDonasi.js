document.addEventListener('DOMContentLoaded', () => {
  const urlParams = new URLSearchParams(window.location.search);
  const method = urlParams.get("method");

  const qrMap = {
    "Bank Transfer (BCA)": "/img/qrbni.png",
    "Bank Transfer (BRI)": "/img/qrbni.png",
    "E-Wallet (DANA)": "/img/qrbni.png",
    "E-Wallet (OVO)": "/img/qrbni.png",
    "E-Wallet (GoPay)": "/img/qrbni.png",
    "E-Wallet (Shopeepay)": "/img/qrbni.png"
  };

  if (!method || !qrMap[method]) {
    alert("Silakan pilih metode pembayaran terlebih dahulu.");
    window.location.href = "/metode-donasi"; // sesuaikan route-nya
    return;
  }

  const imgSrc = qrMap[method];
  document.getElementById("qrImage").src = imgSrc;

  const number = urlParams.get("number");
  const amount = urlParams.get("amount");

  document.getElementById("backButton").href =
    `/pembayaran-donasi?method=${encodeURIComponent(method)}&number=${encodeURIComponent(number)}&amount=${encodeURIComponent(amount)}`;
});
