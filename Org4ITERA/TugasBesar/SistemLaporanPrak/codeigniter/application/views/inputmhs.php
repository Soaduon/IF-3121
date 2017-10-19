<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>Input Data Mahasiswa</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css\Home.css">

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
			<div class="row">
				<div class="col-md-14">
					<div class="col-md-4 left">
						<div class="sidebar">
							<div class="list-group">
								<a href="#" class="list-group-item disabled">Mahasiswa</a>
								<a href="<?php echo site_url('main/input')?>" class="list-group-item">Input Mahasiswa</a>
								<a href="<?php echo site_url('main/mhs')?>" class="list-group-item">Daftar Mahasiswa</a>
								<a href="<?php echo site_url('main/nilai')?>" class="list-group-item">Nilai Mahasiswa</a>
							</div>
							<div class="list-group">
								<a href="#" class="list-group-item disabled">Laboran</a>
								<a href="#" class="list-group-item">Input Laboran</a>
								<a href="#" class="list-group-item">Daftar Laboran</a>
							</div>
							<div class="list-group">
								<a href="#" class="list-group-item disabled">Praktikum</a>
								<a href="#" class="list-group-item">Input Praktikum</a>
								<a href="#" class="list-group-item">Jadwal Praktikum</a>

							</div>
						</div>
					</div>
					<div class="col-md-8">
						<legend>Input Data Mahasiswa</legend>
			<form class="form-horizontal" role="form" method="POST" action="<?=base_url()?>index.php/main/procInput">
				<div class="form-group">
					<label class="col-sm-2 control-label">NIM</label>
					<div class="col-sm-3">
						<input type="text" name="nim" class="form-control" placeholder="NIM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama</label>
					<div class="col-sm-3">
						<input type="text" name="nama" class="form-control" placeholder="Nama">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Username</label>
					<div class="col-sm-3">
						<input type="text" name="username" class="form-control" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Password</label>
					<div class="col-sm-3">
						<input type="text" name="password" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="form-group button">
					<label class="col-md-1 col-sm-offset-2" ></label>
					<button type="submit" name="submit" class="btn btn-success btn-md">Input</button>
					
				</div>

			</form>

					</div>
				</div>
			</div>
		</div>
		<footer>
	  		<div class="container footer">
    			<p class="footer">Copyright © 2017 ORGANISASI 4 Institut Teknologi Sumatera</p>
  			</div>
		</footer>
	</div>	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>