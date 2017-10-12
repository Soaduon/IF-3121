<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>SILP | Sistem Informsai Laporan Praktikum</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

</head>
<body>
	<div class="container">
		<div class="content">
			<div class="item">
					<form method="POST" action="<?=base_url()?>index.php/login/procLogin">
						<div class="logo">
							<img src="<?=base_url()?>assets/img/logo itera oke.png" class="img-rounded">
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" placeholder="password">
						</div>
						<div class="button-group in">
							<p>
							<button type="submit" class="btn btn-primary btn-md" name="loogin">Login</button>
							<button class="btn btn-link btn-md">SIgn Up</button>
							</p>
						</div>
					</form>
				</div>
		</div>
	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</body>
</html>
