<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	$nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $alamat = $_POST['alamat'];
  $ipk = (float) $_POST['ipk'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO mahasiswa VALUES (NULL, '$nim', '$nama', '$prodi','$alamat',$ipk)";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:list.php");
?>
