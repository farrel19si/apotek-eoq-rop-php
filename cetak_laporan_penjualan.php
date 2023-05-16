<?php
// Langkah 1: Persiapkan template laporan penjualan (HTML)
$laporan = '
<!DOCTYPE html>
<html>
<head>
  <title>Laporan Penjualan</title>
  <style>
    /* Gaya CSS untuk laporan */
  </style>
</head>
<body>
  <h1>Laporan Penjualan</h1>
  <table>
    <tr>
      <th>No.</th>
      <th>Tanggal</th>
      <th>Nama Produk</th>
      <th>Jumlah</th>
      <th>Total Harga</th>
    </tr>
    <!-- Data penjualan akan diisi di sini -->
  </table>
</body>
</html>
';

// Langkah 2: Buat halaman cetak laporan
if (isset($_GET['print'])) {
    // Langkah 3: Ambil data penjualan dari database
    include "koneksi.php"; // Sesuaikan dengan nama file koneksi Anda
    $query = "SELECT * FROM penjualan";
    $result = mysqli_query($koneksi, $query);

    // Langkah 4: Tampilkan data pada template laporan
    $data_penjualan = '';
    $nomor = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $data_penjualan .= '
      <tr>
        <td>' . $nomor . '</td>
        <td>' . $row['tanggal'] . '</td>
        <td>' . $row['nama_produk'] . '</td>
        <td>' . $row['jumlah'] . '</td>
        <td>' . $row['total_harga'] . '</td>
      </tr>
    ';
        $nomor++;
    }
    $laporan = str_replace('<!-- Data penjualan akan diisi di sini -->', $data_penjualan, $laporan);

    // Langkah 5: Tampilkan halaman cetak laporan
    echo $laporan;
    echo '<script>window.print();</script>';
}
