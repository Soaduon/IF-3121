<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistem Informasi Laporan Praktikum</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/Loginn.css">
</head>
<body>
	<img src="<?=base_url()?>assets/img/logo itera oke.png" class="itera">
	<h1>Sistem Informasi Laporan Praktikum</h1>
	
	<form class="Form" method="POST" action="<?=base_url()?>index.php/Home/Loginn">
		<div class="avatar">
			<img src="<?=base_url()?>assets/img/img.png" class="ava">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Username" name="username">
			<hr class="hr1" width="93%">
		</div>
		<div class="form-group">
			<input type="Password" class="form-control" placeholder="Password" name="password">
			<hr class="hr2" width="93%">
		</div>
		<div class="form-group">
			<input type="submit" value="submit" class="a">
		</div>
		<p class="forgot"> Forgot Password?</p>
	</form>
	<div class="container">
		<div class="jumbotron">
		</div>
	</div>

	
</body>
</html>
