const jumlah = document.getElementById('jumlah');
const kategori = document.getElementById('kategori');
const totalHarga = document.getElementById('totalHarga');

function hitungTotal() {
    let harga = 0;
    let jml = parseInt(jumlah.value);
    let kat = kategori.value;

    if (kat === 'dewasa') {
        harga = 100000;
    }else if (kat === 'anak') {
        harga = 50000;
    }

    let total = harga * jml;
    totalHarga.value = "Rp " + total.toLocaleString("id-ID");
}

jumlah.addEventListener("input", hitungTotal);
kategori.addEventListener("change", hitungTotal);

document.addEventListener("DOMContentLoaded", hitungTotal);