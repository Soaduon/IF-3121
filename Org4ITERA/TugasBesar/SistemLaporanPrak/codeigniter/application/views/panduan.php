<!DOCTYPE html>
<html>
<head>
	<title>Jadwal Praktikum - Laporan Hasil Praktikum</title>
	<link rel="icon" type="image/png" href="<?=base_url()?>assets/img/logo itera oke.png">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/Home.css">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>  
<div class="container base">
  <div class="container">
			<div class="row">
				<div class="col-md-2">
					<img src="<?=base_url()?>assets/img/img.png" style="width: 150px">
				</div>
				<div class="col-md-5">
					<h3 style="font-size: 30px; color: blue; font-family:  'Lato', sans-serif;"><b>LIE-ITERA</b></h3>
						<p style="display: block;"><i>Laboratory of Informatics Engineering</i></p>
						<p style="display: block;"><i>Sumatera Institute of Technology</i></p>
				</div>
				<div class="col-md-12"></div>
					<div>
					<p id="demo" style="float: right; font-size: 12px; margin-right: 20px;"></p>

						<script>
						document.getElementById("demo").innerHTML = Date();
						</script>
				</div>
			</div>
		</div>
</div>

<nav class="container navbar navbar-default" role="navigation" style="background-color: #5d62a3;">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="<?=base_url()?>index.php" style="color: black; text-decoration: none; display: block;"><span class="glyphicon glyphicon-home"></span>Home</a></li>

				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: black; text-decoration: none; display: block;"><span class="glyphicon glyphicon-list-alt"></span>Pengumuman<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url()?>index.php/home/panduan" style="color: black; text-decoration: none; display: block;">Panduan</a></li>
						<li><a href="<?=base_url()?>index.php/home/informasi" style="color: black; text-decoration: none; display: block;">Informasi</a></li>
						<li><a href="<?=base_url()?>index.php/home/nilai" style="color: black; text-decoration: none; display: block;">Nilai</a></li>
					</ul>
				</li>


				<li><a href="<?=base_url()?>index.php/home/JadwalPraktikum" style="color: black; text-decoration: none; display: block;"><span class="glyphicon glyphicon-calendar"></span>Jadwal Praktikum</a></li>
				<li><a href="<?=base_url()?>index.php/home/contactus" style="color: black; text-decoration: none; display: block;"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
			</ul>
			<form class="navbar-form pull-right" style="float: right;">
				<input type="Search" style="background: #fff;" value="Search">
				<button type="Search" class="btn btn-default">Search</button>
			</form>	
			<ul class="nav navbar-nav navbar-right">
		      <li><a href="#"  style="color: black; text-decoration: none;"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
		      <li><a href="<?=base_url()?>index.php/home/Login"  style="color: black; text-decoration: none;"><span class="glyphicon glyphicon-log-in" ></span>Login</a></li>
    		</ul>
			
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
<div class="container content">
	<div class="row">
		<h3 style="text-align: center; font-size: 20px; font: Arial;"> PANDUAN PRAKTIKUM </h3>
		<div class="col-md-20">
				<hr>
				<ol><b>TATA TERTIB PELAKSANAAN PRAKTIKUM</b></ol>
					<ol type="A">
						<li>Datang tepat waktu, terlambat lebih dari 10 menit tidak diperkenankan masuk ruang praktikum kecuali ada alasan yang dapat diterima. </li>
						<li>Pakaian :</li>
							<ol type="1">
							<li>Mengenakan atasan kemeja berkerah (bukan kaos) warna putih polos, tidak ketat, dan tidak transparan, Baju dimasukkan bagi mahasiswa.</li>
							<li>Mengenakan bawahan warna hitam non-jeans; mahasiswi yang memakai rok, minimal 10 cm di bawah lutut.</li>
							<li>Switer/blezer/jaket harus dilepas. </li>
							<li>Memakai sepatu tertutup, bukan sepatu sandal.</li>
							</ol>
						<li>Membawa alat tulis dan alat hitung (kalkulator) sendiri, tidak diperkenankan menggunakan HP. </li>
						<li>Hadir minimal 80% untuk dapat mengikuti ujian. </li>
						<li>Mengerjakan semua tugas praktikum secara mandiri, kecuali ditentukan untuk kerja kelompok. </li>
						<li>Praktikan yang tidak mengikuti praktikum pada hari tertentu, diperkenankan untuk mengikutinya di kelas lain pada minggu yang sama dengan seijin instruktur/asisten. </li>
						<li>Selama pelaksanaan praktikum, praktikan tidak diperkenankan menerima telepon dan/atau menjawab sms/BBM. </li>
						<li>Hal-hal yang belum diatur dalam tata tertib ini akan diatur kemudian oleh instruktur dan asisten kelas masing-masing. </li>
	
					</ol>
		</div>

		<br><br>
		<div class="container-fluid">
			<div class="row">
				<table class="table table-hover">
					<div class="container-fluid"></div>

				</table>
			</div>	
		</div>
		
	</div>
</div>

	<div class="container footer">
		<div class="row">
			<div class="col-md-12">
				Copyright © 2017 ORGANISASI 4 Institut Teknologi Sumatera 
			</div>
		</div>
	</div>

	
</body>
</html>
