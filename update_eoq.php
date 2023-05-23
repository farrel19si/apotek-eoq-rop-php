<?php
include "koneksi.php";
$id_barang = $_POST["id_barang"];
$permintaan_tahun = $_POST["permintaan_tahun"];
$penjualan_max = $_POST["penjualan_max"];
$biaya_pesan = $_POST["biaya_pesan"];
$biaya_simpan = $_POST["biaya_simpan"];

$query = "UPDATE barang SET rata_jan='$rata_jan',rata_feb='$rata_feb',rata_mar='$rata_mar',rata_apr='$rata_apr',rata_may='$rata_may',rata_jun='$rata_jun',rata_jul='$rata_jul',rata_agus='$rata_agus',rata_sept='$rata_sept',rata_okt='$rata_okt',rata_nov='$rata_nov',rata_des='$rata_des',biaya_pesan ='$biaya_pesan',biaya_simpan='$biaya_simpan'  WHERE id_barang='$id_barang' ";


if (mysqli_query($koneksi, $query)) {
    header("Location: persediaan.php");
} else {
    echo "Data gagal ditambahkan : " . mysqli_error($koneksi);
}
