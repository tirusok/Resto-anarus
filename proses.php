<form method="POST" action="proses.php">
    <label for="menu">Pilih Menu:</label>
    <select id="menu" name="menu">
        <option value="mie_ayam">Mie Ayam</option>
        <option value="bakso">Bakso</option>
        <option value="soto">Soto</option>
    </select>

    <label for="jumlah">Jumlah:</label>
    <input type="number" id="jumlah" name="jumlah" min="1" required>

    <button type="submit">Pesan</button>
</form>

<?php
// Periksa apakah form telah dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $menu = $_POST['menu'] ?? '';
    $jumlah = $_POST['jumlah'] ?? 0;

    // Validasi data
    if (!empty($menu) && $jumlah > 0) {
        // Array harga menu
        $harga_menu = [
            'mie_ayam' => 15000,
            'bakso' => 12000,
            'soto' => 10000
        ];

        // Periksa apakah menu tersedia di daftar harga
        if (array_key_exists($menu, $harga_menu)) {
            // Hitung total harga
            $harga = $harga_menu[$menu];
            $total_harga = $harga * $jumlah;

            // Tampilkan hasil
            echo "<h2>Detail Pesanan</h2>";
            echo "Menu: " . htmlspecialchars($menu) . "<br>";
            echo "Harga per porsi: Rp " . number_format($harga, 0, ',', '.') . "<br>";
            echo "Jumlah: " . intval($jumlah) . "<br>";
            echo "Total Harga: Rp " . number_format($total_harga, 0, ',', '.') . "<br>";
        } else {
            echo "Menu tidak ditemukan.";
        }
    } else {
        echo "Mohon isi semua field dengan benar.";
    }
} else {
    echo "Akses langsung ke
     halaman ini tidak diizinkan.";
}

?>


