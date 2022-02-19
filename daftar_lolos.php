<?php 

include 'function.php';

$ambil=query("SELECT *FROM siswa where hasil='lolos'");



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
							Daftar Lolos
						</div>

					</div>
					<a href="logout.php" class="logout">
						Logout
					</a>

				</div>

				<div class="konten">

					<!-- TABLE -->

					<p class="daftar-siswa">Daftar Siswa</p>
					<table class="tbl-master">
						<tr class="head-tbl">
							<td>No</td>
							<td>Nama</td>
							<td>Alamat</td>
							<td>JK</td>
							<td>Asal SMP</td>
							<td>Nilai</td>
							<td class="hasil">Hasil</td>
							<td class="aksi">Aksi</td>
						</tr>

						<?php $i=1; ?>
						<?php foreach($ambil as $row): ?>
							<tr class="conten-tbl">
								<td><?php echo $i; ?></td>
								<td><?php echo $row['nama']; ?></td>
								<td><?php echo $row['alamat']; ?></td>
								<td><?php echo $row['jk'] ?></td>
								<td><?php echo $row['asal_sekolah']; ?></td>
								<td><?php echo $row['nilai']; ?></td>
								<td><?php echo $row['hasil']; ?></td>
								<td>
									<a href="edit.php?id=<?php echo $row['id']; ?>"><button class="set-btn">edit</button></a>
									<a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin?')"><button class="set-btn">hapus</button></a>
								</td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</table>
				</div>

			</div>
		</div>


	</div>

</body>
</html>