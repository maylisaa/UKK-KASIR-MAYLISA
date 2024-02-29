<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'ukk_maylisa');

if(mysqli_connect_errno()){
  echo "koneksi database gagal : " . mysqli_connect_error();
}

?>