<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=ASMO-708">
	<style type="text/css">
	body,td,th {
	color: #0F0;
}
    body {
	background-image: url(body.jpg);
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
					<a class="navbar-brand" title="Home"  href="#">Aplikasi Data Mahasiswa</a>
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
								<h3 class="panel-title">Dashboard</h3>
							</div>
							<div class="panel-body">
							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>From Admin!</strong> Dengan aplikasi ini anda bisa membuat daftar informasi data mahasiswa, mengedit dan menghapus data mahasiswa.
							</div>

							<div class="row">
								<div class="col-md-2">
									<a href="input.php" title="Tambah Data" class="btn btn-large 
									btn-block btn-primary big-icon"><span class="glyphicon">
									<img title="Tambah" src="img/create.png"/></span><br>Tambah Data</a>
								</div>
								<div class="col-md-2">
									<a href="list.php" title="Lihat Daftar" class="btn btn-large 
									btn-block btn-primary big-icon"><span class="glyphicon"><img title="Lihat" src="img/read.png"/></span><br>Lihat Data</a>
								</div>
								<div class="col-md-2">
									<a href="search.php" title="Pencarian data" class="btn btn-large 
									btn-block btn-primary big-icon"><span class="glyphicon">
									<img title="Cari" src="img/search.png"/></span><br>Cari Data</a>
								</div>
								<div class="col-md-2">
									<a href="about.php" title="Tentang" class="btn btn-large 
									btn-block btn-primary big-icon"><span class="glyphicon">
                                    <img title="Tentang" src="img/about.png"/></span><br>Tentang</a>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
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