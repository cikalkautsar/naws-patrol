let selectedAmount = 0;

window.setAmount = function(amount) {
    selectedAmount = amount;
    document.getElementById('customAmount').value = '';
};

window.goToNext = function() {
    const custom = document.getElementById('customAmount').value.replace(/\D/g, '');
    const finalAmount = custom ? parseInt(custom) : selectedAmount;
    if (!finalAmount || finalAmount <= 0) {
        alert("Masukkan atau pilih nominal donasi.");
        return;
    }
    window.location.href = `/data-pendonasi?amount=${finalAmount}`;
};
