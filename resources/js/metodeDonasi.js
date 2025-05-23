const bankSelect = document.getElementById("bankSelect");
const ewalletSelect = document.getElementById("ewalletSelect");
const submitBtn = document.getElementById("submitBtn");

const bankAccounts = {
    BCA: "123 456 7890",
    BRI: "789 101 1121",
    BNI: "456 789 0123",
    Mandiri: "321 654 9870"
};

const ewalletAccounts = {
    DANA: "0857 0000 1111",
    OVO: "0812 2222 3333",
    GoPay: "0896 3333 4444",
    Shopeepay: "0813 4444 5555"
};

function updateButtonText() {
    const bankSelected = bankSelect.value !== "Bank";
    const ewalletSelected = ewalletSelect.value !== "E-Wallet";

    if (bankSelected || ewalletSelected) {
        submitBtn.textContent = "Bayar";
    } else {
        submitBtn.textContent = "Pilih metode pembayaran terlebih dahulu";
    }
}

bankSelect.addEventListener("change", () => {
    if (bankSelect.value !== "Bank") {
        ewalletSelect.value = "E-Wallet";
    }
    updateButtonText();
});

ewalletSelect.addEventListener("change", () => {
    if (ewalletSelect.value !== "E-Wallet") {
        bankSelect.value = "Bank";
    }
    updateButtonText();
});

submitBtn.addEventListener("click", () => {
    let method = "";
    let number = "";

    if (bankSelect.value !== "Bank") {
        method = `Bank Transfer (${bankSelect.value})`;
        number = bankAccounts[bankSelect.value];
    } else if (ewalletSelect.value !== "E-Wallet") {
        method = `E-Wallet (${ewalletSelect.value})`;
        number = ewalletAccounts[ewalletSelect.value];
    } else {
        alert("Silakan pilih metode pembayaran terlebih dahulu.");
        return;
    }

    const amount = new URLSearchParams(window.location.search).get("amount");
    window.location.href = `/pembayaran-donasi?method=${encodeURIComponent(method)}&number=${encodeURIComponent(number)}&amount=${amount}`;
});
