<?php 
include '../koneksi.php';

$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];

mysqli_query($koneksi, "UPDATE pelanggan set NamaPelanggan='$NamaPelanggan', NomorTelepon='$NomorTelepon', Alamat='$Alamat' where PelangganID='$PelangganID'");

header("location:pembelian.php?pesan=update");

?>