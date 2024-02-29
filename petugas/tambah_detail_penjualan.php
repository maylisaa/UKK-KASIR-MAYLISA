<?php
include '../koneksi.php';

$PelangganID = $_POST['PelangganID'];
$PenjualanID = $_POST['PenjualanID'];

mysqli_query($koneksi, "INSERT into detailpenjualan values('','$PenjualanID','','','')");

header("location:detail_pembelian.php?PelangganID=$PelangganID");

?>