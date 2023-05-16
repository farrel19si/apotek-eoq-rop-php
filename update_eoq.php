<?php
include "koneksi.php";
$id_barang = $_POST["id_barang"];
$permintaan_tahun = $_POST["permintaan_tahun"];
$biaya_pesan = $_POST["biaya_pesan"];
$biaya_simpan = $_POST["biaya_simpan"];

$query = "UPDATE barang SET permintaan_tahun='$permintaan_tahun',biaya_pesan ='$biaya_pesan',biaya_simpan='$biaya_simpan'  WHERE id_barang='$id_barang' ";


if (mysqli_query($koneksi, $query)) {
    header("Location: persediaan.php");
} else {
    echo "Data gagal ditambahkan : " . mysqli_error($koneksi);
}
