<?php
  // buat koneksi dengan database mysql
  $host = "localhost";
  $user = "id4892473_root";
  $pass = "qwerty123";
  $name = "id4892473_nyoba";
  $link = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>
