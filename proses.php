<?php
function hitungTotal($jumlah, $kategori) {
    $harga = $kategori == "dewasa" ? 100000 : 50000;
    return $jumlah * $harga;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $nama = htmlspecialchars($_POST["nama"]);
    $jumlah = intval($_POST["jumlah"]);
    $kategori = $_POST["kategori"];
    $total = hitungTotal($jumlah, $kategori);

    echo "<h2>Detail Pemesanan</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Jumlah Tiket: " . $jumlah . "<br>";
    echo "Kategori: " . ucfirst($kategori) . "<br>";
    echo "Total Harga: Rp " . number_format($total, 0, ',', ',');
}
?>
