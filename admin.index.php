<?php 

include 'function.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: admin.index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
	$result = mysqli_query($koneksi, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: admin.php");
	} else {
		echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
	}
}
if (isset($_POST['regis'])){
	echo "
	<script> document.location.href='admin.register.php';

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
							<td colspan="2" class="set-field-head2">Login</td>
						</tr>

						
						<tr >
							<td class="set-field2">Email</td>
							<td><input type="text" name="email"  class="text-set2"></td>
						</tr>
						<tr >
							<td class="set-field2">Password</td>
							<td><input type="password" name="password"  class="text-set2"></td>
						</tr>
						
						
						

						<tr>
							<td colspan="2" align="center">
								<button type="submit" name="submit" value="submit" class="btn-tambah">Login</button>

							</td>
						</tr>
						<tr>
							<td class="or" colspan="2">atau</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<button type="submit" name="regis" value="regis" class="btn-batal">Register</button>

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