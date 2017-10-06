<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang di page Laporan Praktikum</title>
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
						<li><a href="#">Panduan</a></li>
						<li><a href="#">Informasi</a></li>
						<li><a href="#">Nilai</a></li>
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

<div class="container">
	<div class="row content">
	<marquee><b>SELAMAT DATANG DI HOMEPAGE LAPORAN PRAKTIKUM INSTITUT TEKNOLOGI SUMATERA</b></marquee><hr>
		<div class="col-md-12">
			<div class="col-md-8">
				<h3><b>Salam Koding!!!</b></h3>
						<br>
						<p><b>Selamat Datang Mahasiswa Teknik Informatika ITERA.</b></p>
						<p>Berkaitan dengan bertambah banyaknya mahasiswa Teknik Informatika ITERA, maka akan mulai dilakukan pembuatan dan pengumpulan laporan resmi secara online untuk kegiatan praktikum.</p>
						<p>Laporan praktikum yang sudah dikerjakan dapat dikumpul secara online sesuai dengan deadline pada matakuliah yang berkaitan.</p>
						<p>Adapun pengumpulannya secara individu dan tidak dapat diwakilkan, dan apabila ada yang berhalangan silahkan hubungi kordinator yang bersangkutan.</p>
						<ul>
							<li>Untuk panduan dan Pengumuman dapat dilihat ditautan<a href="/home/asa19/Kuliah/tubes/Pengumuman.html"> ini</a></li>
							<li>Untuk melihat jadwal praktikum dapat dilihat di link <a href="/home/asa19/Kuliah/tubes/JadwalPraktikum.html">ini</a></li>
						</ul>
						<p>Sebelum melakukan pengumpulan, perhatikan kembali panduan yang sudah disediakan.</p>
						<p>Apabila mengalami kesulitan silahkan bertanya melalui form di bawah ini atau dapat menghubungi asisten masing-masing.</p>
						<p>Terimakasih.</p>
			</div>
			<div class="col-md-4">
				<div id="calendar" class="sidesection" style="">
					<h1></h1>
					<table>
						<tr>
							<td class="availbleDay">1</td>
							<td class="availbleDay">2</td>
							<td class="availbleDay">3</td>
							<td class="availbleDay">4</td>
							<td class="availbleDay">5</td>
							<td class="availbleDay">6</td>
							<td class="availbleDay">7</td>
						</tr>
						<tr>
							<td class="availbleDay">8</td>
							<td class="availbleDay">9</td>
							<td class="availbleDay">10</td>
							<td class="availbleDay">11</td>
							<td class="availbleDay">12</td>
							<td class="availbleDay">13</td>
							<td class="availbleDay">14</td>
						</tr>
						<tr>
							<td class="availbleDay">15</td>
							<td class="availbleDay">16</td>
							<td class="availbleDay">17</td>
							<td class="availbleDay">18</td>
							<td class="availbleDay">19</td>
							<td class="availbleDay">20</td>
							<td class="availbleDay">21</td>
						</tr>
						<tr>
							<td class="availbleDay">22</td>
							<td class="availbleDay">23</td>
							<td class="availbleDay">24</td>
							<td class="availbleDay">25</td>
							<td class="availbleDay">26</td>
							<td class="availbleDay">27</td>
							<td class="availbleDay">28</td>
						</tr>
						<tr>
							<td class="availbleDay">29</td>
							<td class="availbleDay">30</td>
							<td class="nextMonth">1</td>
							<td class="nextMonth">2</td>
							<td class="nextMonth">3</td>
							<td class="nextMonth">4</td>
							<td class="nextMonth">5</td>
						</tr>
					</table>
					<script>
						var months = "January,February,March,April,May,June,July,August,September,October,November,December".split(",");
						window.onload=function() {
    						var d = new Date();
    							document.getElementById("calendar").getElementsByTagName("h1")[0].innerHTML=months[d.getMonth()];
    						document.getElementsByTagName("td")[d.getDate()-1].className="currentA";
    					}
					</script>
					
		</div>
		<div class="col-md-4">
				<h4>Recent Post</h4>
			<ul class="last-post">
				<li><a href="#">Modul Dasar Pemrogaman</a></li>
				<li><a href="#">Perubahan Jadwal</a></li>
			</ul>
		</div>
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
