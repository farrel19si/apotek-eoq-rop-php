<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "makmur";

$koneksi = mysqli_connect($host,  $user,  $pass ,$name) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>