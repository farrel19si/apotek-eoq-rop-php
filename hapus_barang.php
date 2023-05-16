<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_barang   = $_GET['id_barang'];
// query SQL untuk insert data
$query="DELETE from barang where id_barang='$id_barang'";

if (mysqli_query($koneksi, $query)) {
    header("Location: data_barang.php");
} else {
      echo "Delete Produk Gagal: " . mysqli_error($koneksi);
}
