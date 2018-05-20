<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Data</title>

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
                <h3 class="panel-title">Input Data Mahasiswa</h3>
              </div>
              <div class="panel-body">
      <form id="form_mahasiswa" action="input_proses.php" method="post" class="form-horizontal" role="form">
        <div class="form-group">
             <label for="nim" class="control-label col-md-2"> NIM : </label>
             <div class="col-md-10">
                  <input type="text" name="nim" id="nim" placeholder="Contoh: 16090153" class="form-control">
             </div>
        </div>    
        <div class="form-group">
            <label for="nama" class="control-label col-md-2">NAMA : </label>
            <div class="col-md-10">
            <input type="text" name="nama" id="nama" class="form-control">
            </div>
        </div>
        <div class="form-group">  
            <label for="prodi" class="control-label col-md-2">PRODI : </label>
            <div class="col-md-10">
              <select name="prodi" id="prodi" class="form-control">
                <option value=""></option>
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Kebidanan">Kebidanan</option>
                  <option value="Farmasi">Farmasi</option>
                  <option value="Akuntansi">Akuntansi</option>
                  <option value="Teknik Komputer">Teknik Komputer</option>
                  <option value="Teknik Mesin">Teknik Mesin</option>
                  <option value="Teknik Elektro">Teknik Elektro</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <label for="alamat" class="control-label col-md-2">ALamat : </label>
            <div class="col-md-10">
                 <input type="text" name="alamat" id="alamat" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="ipk" class="control-label col-md-2">IPK : </label>
            <div class="col-md-10">
                 <input type="text" name="ipk" id="ipk" placeholder="Contoh: 3.00" class="form-control">
            </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
            <button class="save btn btn-large btn-info" type="submit" name="input" value="Tambah Data" title="Simpan Data">Save</button>
              <a href="list.php" class="btn btn-large btn-default" title="Batal Simpan">Cancel</a>
        </div>
          </div>
      </form>
    </div>
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
  </body>
</html>
