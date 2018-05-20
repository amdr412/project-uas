<?php
// start session
session_start();
// menyertakan file database, untuk membuat koneksi ke mysql
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pencarian Daftar Mahasiswa</title>

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
								<h3 class="panel-title">Pencarian Data</h3>
							</div>
							<div class="panel-body">
								<form method="GET" role="form">
									<div class="input-group">
								      <input type="text" class="form-control" name="keyword" placeholder="masukan id, nim, nama, alamat, prodi, atau ipk" required="required">
								      <span class="input-group-btn">
								        <button class="btn btn-primary" type="submit">Go!</button>
								      </span>
								    </div><!-- /input-group -->
								</form>
								<div class="clearfix">&nbsp;</div>


								<?php if (isset($_GET['keyword'])){?>
								<?php
										
										$keyword = $_GET['keyword'];
										$query = "SELECT * FROM mahasiswa WHERE id LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR prodi LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR ipk LIKE '%$keyword%'";
										$result = mysqli_query($link, $query);
										 if(!$result){
                                            die ("Query Error: ".mysqli_errno($link).
                                                  " - ".mysqli_error($link));}?>
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>No</th><th>Nim</th><th>Nama</th><th>Prodi</th><th>Alamat</th><th>Ipk</th><th>Opsi</th>
											</tr>
										</thead>
										<tbody>
										<?php
										 while($data = mysqli_fetch_assoc($result)){?>
										<tr>
											<td><?php echo $data['id']; ?></td>
											<td><?php echo $data['nim']; ?></td>
											<td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['prodi']; ?></td>
											<td><?php echo $data['alamat']; ?></td>
											<td><?php echo $data['ipk']; ?></td>
											<td>
												<div class="btn-group" role="group" aria-label="...">
												  <a href="edit.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-warning" title="Edit">Edit</a>
												  <a href="actions/delete.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-danger" title="Hapus">Hapus</a>
												</div>
											</td>
										</tr>


										<?php }; ?>
										</tbody>
									</table>
								</div>
								<?php }else{?>
							
							<?php }; ?>
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
