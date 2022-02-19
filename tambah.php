<?php 

include 'function.php';

if (isset($_POST["tambah"])) {

	if(tambah($_POST) > 0){
		echo "
		<script> 
		alert('data berhasil ditambahkan!');
		document.location.href='admin.php';

		</script>
		";
	}else{
		echo "
		<script> 
		alert('data gagal ditambahkan!');
		document.location.href='admin.php';

		</script>
		";
	}


}

if(isset($_POST["batal"])){

	echo "
	<script> 
	alert('data tidak diubah!');
	document.location.href='admin.php';

	</script>";

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>

	<div class="container">

		<div class="container-2">

			<div class="side-bar">
				<div class="head-side"><br>SMAN NEO</div>
				<div class="dash-side">Dashboard</div>
				<br>
				<div class="admin-side">Admin</div>
				<br>
				<a href="admin.php" ><div class="master-data">Master Data</div></a>

				<a href="tambah.php"class="tambah"><div>Tambah</div></a>

				<a href="daftar_lolos.php"class="tambah"><div>Daftar Lolos</div></a>

				<a href="daftar_tlolos.php"class="tambah"><div>Daftar Tidak Lolos</div></a>
			</div>


			<div class="kotak2">
				<div class="header">

					<div class="set-head">
						<div class="set-nav">
							Tambah
						</div>

					</div>
					<a href="logout.php" class="logout">
						Logout
					</a>

				</div>

				<div class="konten">

					<!-- TABLE -->

					<form action="" method="post" class="form-set">

						<table class="set-tbl">
							<tr>
								<td colspan="2" class="set-field-head">Tambah Data Pendaftar</td>
							</tr>

							<tr >
								<td class="set-field">Nama</td>
								<td><input type="text" name="nama" required class="text-set"></td>
							</tr>
							<tr >
								<td class="set-field">Alamat</td>
								<td><input type="text" name="alamat" required class="text-set"></td>
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
								<td><input type="text" name="asal_sekolah" required class="text-set"></td>
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
									<button type="submit" name="tambah" value="tambah" class="btn-tambah">Tambah</button>

								</td>
							</tr>
							<tr>
								<td class="or" colspan="2">atau</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<button type="submit" name="batal" value="batal" class="btn-batal">Batal</button>

								</td>
							</tr>
						</table>

					</form>
				</div>

			</div>
		</div>


	</div>

</body>
</html>