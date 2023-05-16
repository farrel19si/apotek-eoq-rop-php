<?php
include "koneksi.php";
$id_barang = $_POST["id_barang"];
$stok = $_POST["stok"];

$query = "UPDATE barang SET stok ='$stok'  WHERE id_barang='$id_barang' ";


if (mysqli_query($koneksi, $query)) {
    header("Location: persediaan.php");
} else {
    echo "Data gagal ditambahkan : " . mysqli_error($koneksi);
}
