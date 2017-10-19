<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>Nilai Mahasiswa</title>
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
	<script src="js/bootstrap.min.js"></script>
</body>
</html>