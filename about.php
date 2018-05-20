<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tentang Aplikasi</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
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

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><marquee>Selamat datang di aplikasi crud data mahasiswa, Dengan aplikasi ini anda bisa membuat daftar informasi data mahasiswa.</marquee></a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div id="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Biodata Pembuat</h3>
							</div>				
              <div class="panel-body">
    <div class="container">
      <form id="form_mahasiswa" action="input_proses.php" method="post">
        <fieldset>
          <p>
            <label for="Nim">NIMM : </label>
            <input type="text" name="nim" id="nim" placeholder="16090153">
          </p>
          <p>
            <label for="Nama">Nama : </label>
            <input type="text" name="nama" id="nama" placeholder="Ahmad  Ropii">
          </p>
           <p>
            <label for="Kelas">Kelas : </label>
            <input type="text" name="kelas" id="kelas" placeholder="4D">
          </p>
           <p>
            <label for="Prodi">Prodi : </label>
            <input type="text" name="prodi" id="prodi" placeholder="D4-Teknik Informatika">
          </p>
      </form>
    </div>
	<div class="table-responsive">							
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
<?php

 ?>