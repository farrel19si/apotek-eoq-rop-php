<?php
include "koneksi.php";
$id_barang = $_POST["id_barang"];
$stok = $_POST["stok"];

if (isset($_POST['jumlah_tambah'])) {
    $jumlah_tambah = $_POST['jumlah_tambah'];
    // Lakukan sesuatu dengan nilai input yang diterima
}


$query = "UPDATE barang SET stok = stok + '$jumlah_tambah'  WHERE id_barang='$id_barang' ";


if (mysqli_query($koneksi, $query)) {
    header("Location: persediaan.php");
} else {
    echo "Data gagal ditambahkan : " . mysqli_error($koneksi);
}
