<?php
include '../koneksi.php';

$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];

mysqli_query($koneksi, "INSERT INTO produk values('', '$NamaProduk', '$Harga', '$Stok')");

header("location:data_barang.php?pesan=simpan");
?>