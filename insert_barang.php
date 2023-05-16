<?php
include 'koneksi.php';
$id_barang = $_POST["id_barang"];
$nama_barang = $_POST["nama_barang"];
$stok = $_POST["stok"];
$lead_time = $_POST["lead_time"];
$rata_perhari = $_POST["rata_perhari"];
$safety_stock = $_POST["safety_stock"];



$query_sql = "INSERT INTO barang (id_barang,nama_barang,stok,lead_time,rata_perhari,safety_stock) 
                                    VALUES ('$id_barang','$nama_barang','$stok','$lead_time','$rata_perhari','$safety_stock')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: data_barang.php");
} else {
    echo "Data gagal ditambahkan : " . mysqli_error($koneksi);
}
