<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemilihan Mahasiswa Raya 2019 | Polimedia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon"  href="favicon.ico">
	<!--<script src="js/a81368914c.js"></script>-->
</head>
<body>
	<img class="wave1" src="img/wave1.svg">
	<img class="wave" src="img/wave.svg">
	<div class="container">
		<div class="img">
			<img src="img/img.svg">
		</div>
		<div class="login-container">
			<form method="POST">
				<img class="logo" src="img/photo.jpg">
				<h2>Login</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div>
						<h5>Username</h5>
						<input class="input" type="text" name="username">
					</div>
				</div>
				<div class="input-div two">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div>
						<h5>Password</h5>
						<input class="input" type="Password" name="password">
					</div>
				</div>
				<input type="submit" class="btn" name="masuk"value="Sign In">	
			</form>

			<?php
			if (isset ($_POST['masuk'])) {
				$username = $_POST['username'];
				$pass = $_POST['password'];
				
				$ambil = $conn->query("SELECT * FROM tbl_user WHERE username = '$username' AND password = '$pass'");
				$count = $ambil->num_rows;
				
				if ($count == 1) {
				$akun = $ambil->fetch_assoc();
				if ($akun['level'] == "Admin") { 
					$_SESSION["tbl_user"] = $akun;
					echo "<script>location='index.php';</script>";
				} elseif ($akun['level'] == "User") {
					$_SESSION["tbl_user"] = $akun;
					echo "<script>location='index.php';</script>";
				}
				} else {
					echo "<script>alert('Anda gagal login, periksa akun anda');</script>";
					echo "<script>location='index.php';</script>";
				}
				
			}
			?>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>