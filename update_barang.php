<?php
include 'koneksi.php';
$id_barang = $_POST["id"];
$nama_produk = $_POST["nama_produk"];
$jumlah= $_POST["jumlah"];


$query_sql = "UPDATE barang SET nama_produk ='$nama_produk' ,jumlah ='$jumlah' WHERE id='$id_barang' ";
                                   

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: data_barang.php");
} else {
      echo "Data gagal ditambahkan : " . mysqli_error($koneksi);
}
?>