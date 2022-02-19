<?php 

include 'function.php';

$id=$_GET["id"];

$data= query("SELECT * FROM siswa WHERE id = $id")[0];


if (isset($_POST["edit"])) {

	if(ubah($_POST) > 0){
		echo "
		<script> 
		alert('data berhasil diubah!');
		document.location.href='admin.php';

		</script>
		";
	}else{
		
		echo("Error description: " . $koneksi -> error);
		echo "
		<script> 
		alert('data gagal diubah!');
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
							Master Data
						</div>

					</div>
					<div class="logout">
						Logout
					</div>

				</div>

				<div class="konten">

					<!-- TABLE -->

					<form action="" method="post" class="form-set">

						<table class="set-tbl">
							<tr>
								<td><input type="hidden" name="id" value="<?php echo $data['id'];
							?>"></td>
						</tr>
						<tr>
							<td colspan="2" class="set-field-head">Edit Data Pendaftar</td>
						</tr>

						<tr >
							<td class="set-field">Nama</td>
							<td><input type="text" name="nama" required value="<?php echo $data['nama']?>" class="text-set"></td>
						</tr>
						<tr >
							<td class="set-field">Alamat</td>
							<td><input type="text" name="alamat" required value="<?php echo $data['alamat']?>" class="text-set"></td>
						</tr>
						<tr>
							<td class="set-field">JK</td>
							<td class="">
								<input type="text" class="text-set" name="jk" value="<?php echo $data['jk']?>">


							</td>
						</tr>
						<tr>
							<td class="set-field">Asal Sekolah</td>
							<td><input type="text" name="asal_sekolah" required class="text-set" value="<?php echo $data['asal_sekolah']?>"></td>
						</tr class="set-field">
						<tr>
							<td class="set-field">Nilai</td>
							<td value="<?php echo $data['nilai']?>">
								<input type="text" class="text-set" name="nilai" value="<?php echo $data['nilai']?>">

							</td>
						</tr>
						<tr>
							<td class="set-field">Hasil</td>
							<td>
								<input type="text" class="text-set" name="hasil" value="<?php echo $data['hasil']?>">
							</td>
						</tr>

						<tr>
							<td colspan="2" align="center">
								<button type="submit" name="edit" value="edit" class="btn-tambah">Edit</button>

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