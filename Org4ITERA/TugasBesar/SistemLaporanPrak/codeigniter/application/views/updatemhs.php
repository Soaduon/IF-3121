<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>Daftar Mahasiswa</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/Home.css">

</head>
<body>
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
  			<a class="navbar-brand navbar-left" href="#">
     			Sistem Informasi Laporan Praktikum
      		</a>
      		<p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Administrator</a></p>
  		</div>
	</nav>
		<div class="content">
		<div class="container">
			<legend>Update Nilai Praktikum</legend>
			<form class="form-horizontal" role="form" method="POST" action="<?=base_url()?>index.php/main/procEdit">
				<div class="form-group">
					<label class="col-sm-1 control-label">NIM</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" placeholder="NIM" name="nim">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Nama</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" placeholder="Nama" name="nama">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Username</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Password</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" placeholder="Password" name="password">
					</div>
				</div>
				<div class="form-group button">
					<label class="col-sm-1"></label>
					<button type="submit" type="submit" class="btn btn-success btn-md">Update</button>
					<button type="submit" class="btn btn-warning btn-md">Cancel</button>
				</div>

			</form>
		</div>
	

	<footer>
		<div class="container footer">
    		<p class="footer">Copyright © 2017 ORGANISASI 4 Institut Teknologi Sumatera</p>
  		</div>
	</footer>	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/css/js/bootstrap.min.js"></script>
</body>
</html>