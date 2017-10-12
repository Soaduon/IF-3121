<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>SIGN UP</title>
	<link rel="stylesheet" href="<?=base_url()?>assets\css\bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets\css\register.css">

</head>
<body>
	<div class="container">
		<div class="content">
			<div class="item">
					<form method="POST" action="<?=base_url()?>index.php/signup/ProcSignUp">
					<legend>Register Your Account</legend>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="password">Nama</label>
							<input type="text" class="form-control" placeholder="Nama">
						</div>
						<div class="form-group">
							<label for="password">NIM</label>
							<input type="text" class="form-control" placeholder="NIM">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" placeholder="password">
						</div>
						<div class="button-group in">
							<button type="submit" class="btn btn-info btn-md">Register</button>
							<button type="submit" class="btn btn-default btn-md"><a href="<?php echo site_url('home')?>">Cancel</a></button>	
						</div>
						
					</form>
				</div>
		</div>	
	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?=base_url()?>assets\js/bootstrap.min.js"></script>

</body>
</html>