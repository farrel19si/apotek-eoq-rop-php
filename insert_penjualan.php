<?php
include 'koneksi.php';
$id_penjualan = $_POST["id_penjualan"];
$nama_barang = $_POST["nama_barang"];
$tanggal_penjualan = $_POST["tanggal_penjualan"];
$jumlah_penjualan = $_POST["jumlah_penjualan"];



$query_sql = "INSERT INTO penjualan (id_penjualan,nama_barang,tanggal_penjualan,jumlah_penjualan) 
                                    VALUES ('$id_penjualan','$nama_barang','$tanggal_penjualan','$jumlah_penjualan')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: laporan_penjualan.php");
} else {
    echo "Data gagal ditambahkan : " . mysqli_error($koneksi);
}
