<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
      <meta http-equiv="Content-Type" content="text/html; charset=ASMO-708">
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body background="Logo.png" text="#00FF00">
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" title="Home" href="index.php">Aplikasi Data Mahasiswa</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><marquee>Selamat datang di aplikasi crud data mahasiswa, Dengan aplikasi ini anda bisa membuat daftar informasi data mahasiswa.</marquee></a></li>  
      </div></div>
    </nav>

    <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Tabel Mahasiswa</h3>
              </div>
              <div class="panel-body">
              <a style="margin:10px 0px;" class="btn btn-warning" title="Tambah Data" href="input.php"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
              
    <table class="table table-bordered">
      <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>PRODI</th>
        <th>ALAMAT</th>
        <th>IPK</th>
        <th>OPSI</th>
      </tr></div>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM mahasiswa ORDER BY nim ASC";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan no urut
        echo "<td>$data[nim]</td>"; //menampilkan data nim
        echo "<td>$data[nama]</td>"; //menampilkan data nama
        echo "<td>$data[prodi]</td>"; //menampilkan data fakultas
        echo "<td>$data[alamat]</td>"; //menampilkan data jurusan
        echo "<td>$data[ipk]</td>"; //menampilkan data ipk
        // membuat link untuk mengedit dan menghapus data
        echo '<td>
          <a class="btn btn-xs btn-info" title="Edit Data" href="edit.php?id='.$data['id'].'">Edit</a> |
          <a class="btn btn-xs btn-danger" title="Hapus Data" href="hapus.php?id='.$data['id'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
      <footer class="footer">
      <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
            <p class="credit">Copyright &copy; Ahmad Ropii 2018</p>
            </div>
          </div>
        </div>
      </nav>
      </footer>
    </div>
    </table>
  </body>
</html>
