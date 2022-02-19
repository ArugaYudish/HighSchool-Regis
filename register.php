<?php 

include 'function.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: register.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($koneksi, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
			VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($koneksi, $sql);
			if ($result) {
				echo "<script>alert('Selamat, registrasi berhasil!')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
		}

	} else {
		echo "<script>alert('Password Tidak Sesuai')</script>";
	}
}

if (isset($_POST['login'])){
	echo "
	<script> document.location.href='index.php';

	</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>

	<div class="reg">
		<br><br><br>
		<div class="kotaks">
			<br>
			<center><img src="image/logo.png" width="120"></center>
			<br>

			<div class="kotakform">
				<form action="" method="post" class="form-set">

					<table class="set-tbl">
						<tr>
							<td colspan="2" class="set-field-head2">Registrasi</td>
						</tr>

						<tr >
							<td class="set-field2">Username</td>
							<td><input type="text" name="username"  class="text-set2"></td>
						</tr>
						<tr >
							<td class="set-field2">Email</td>
							<td><input type="text" name="email"  class="text-set2"></td>
						</tr>
						<tr >
							<td class="set-field2">Password</td>
							<td><input type="password" name="password"  class="text-set2"></td>
						</tr>
						<tr >
							<td class="set-field2">Konfirmasi Password</td>
							<td><input type="password" name="cpassword"  class="text-set2"></td>
						</tr>
						
						
						
						

						<tr>
							<td colspan="2" align="center">
								<button type="submit" name="submit" value="submit" class="btn-tambah">Register</button>

							</td>
						</tr>
						<tr>
							<td class="or" colspan="2">atau</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<button type="submit" name="login" value="login" class="btn-batal">Login</button>

							</td>
						</tr>
					</table>
					<br>
					<br>

				</form>
				
			</div>
		</div>
	</div>

</body>
</html>