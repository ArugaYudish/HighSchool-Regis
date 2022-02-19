<?php 

include 'function.php';

if (isset($_POST["tambah"])) {

	if(tambah($_POST) > 0){
		echo "
		<script> 
		alert('data berhasil ditambahkan!');
		document.location.href='home.php';

		</script>
		";
	}else{
		echo "
		<script> 
		alert('data gagal ditambahkan!');
		document.location.href='home.php';

		</script>
		";
	}


}

if(isset($_POST["batal"])){

	echo "
	<script> 
	alert('data tidak diubah!');
	document.location.href='home.php';

	</script>";

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css
	">
</head>
<body>

	<section class="main"> 

		<nav class="nav">
			<!--logo-->
			<a href="home.php" class="logo">
				<center><img src="image/logo.png" width="100"></center>
			</a>
			<!--menu-->
			<div class="menu">
				<a href="home.php" class="con-nav">Home</a>
				<a href="galeri.php" class="con-nav">Galeri</a>
				<a href="registrasi.php" class="con-nav">Registrasi</a>
				<a href="pengumuman.php" class="con-nav">Pengumuman</a>
				<a href="logout.php" class="con-nav">Log Out</a>
			</div>
		</nav>

		<div class="konten">

			<!-- TABLE -->

			<form action="" method="post" class="form-set">

				<table class="set-tbl">
					<tr>
						<td colspan="2" class="set-field-head2">Pendaftaran Siswa 2022/2023</td>
					</tr>

					<tr >
						<td class="set-field">Nama</td>
						<td><input type="text" name="nama" required class="text-set" placeholder="Masukkan Nama"></td>
					</tr>
					<tr >
						<td class="set-field">Alamat</td>
						<td><input type="text" name="alamat" required class="text-set" placeholder="Masukkan Alamat"></td>
					</tr>
					<tr>
						<td class="set-field">JK</td>
						<td class="">
							<select class="text-set" name="jk">
								<option>Laki-laki</option>
								<option>Perempuan</option>
							</select>

						</td>
					</tr>
					<tr>
						<td class="set-field">Asal Sekolah</td>
						<td><input type="text" name="asal_sekolah" required class="text-set" placeholder="Masukkan Asal Sekolah"></td>
					</tr class="set-field">
					<tr>
						<td class="set-field">Nilai</td>
						<td>
							<select class="text-set" name="nilai">
								<option>A</option>
								<option>B</option>
								<option>C</option>
								<option>D</option>
								<option>E</option>
							</select>
						</td>
					</tr>
					

					<tr>
						<td colspan="2" align="center">
							<button type="submit" name="tambah" value="tambah" class="btn-tambah2">Submit</button>

						</td>
					</tr>
					<tr>
						<td class="or" colspan="2">atau</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<button type="submit" name="batal" value="batal" class="btn-batal2">Batal</button>

						</td>
					</tr>
				</table>

			</form>
		</div>

		
	</section>

</body>
</html>