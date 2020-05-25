<?php include_once('autoload.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container ">
		<div class="wrap-login100">
			<div class="col-sm-9">
			</div>
			<div class="col-sm-3">
				<span class="title">
					Daftar
				</span>
			</div>
			<div class="card">
			  <div class="cardr" style="  ">
			    <div class="login100-pic " data-tilt>
						<img src="img/logo.png" alt="IMG" style="margin-top: 170px">
				</div>
			  </div>
			</div>
			<div class="card rightcard" style="border: 0px;" >
				<div class="card-body "  >
					<form action="register_proses.php" method="post">
						<div class="wrap-input100 validate-input txt" data-validate = "Valid email is required: ex@abc.xyz">
								<input class="input100" name="username" placeholder="Username">
								<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input txt" data-validate = "Password is required">
								<input class="input100"  type="email" name="email" placeholder="Email">
								<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input txt" data-validate = "Password is required">
								<input class="input100"  type="password" name="password" placeholder="Password">
								<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input txt" data-validate = "Password is required">
								<input class="input100"  type="password" name="konfirmasi_pass" placeholder="Konfirmasi Password">
								<span class="focus-input100"></span>
						</div>

						<div class="row">	</div>

						<div class="row txt2" >
								<br>Sudah memiliki akun?<br>
								Mari
								<a href="login.php" >Masuk</a>
						<button class="login100-form-btn txt2 "  type="submit" name="registrasi" 
						>
								Daftar
						</button>
						</div>
					</form>
			</div>
		</div>
	</div>
		</div>
</body>
</html>
