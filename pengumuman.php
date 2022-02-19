<?php 

include 'function.php';

$ambil=query("SELECT *FROM siswa where hasil='lolos'");



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengumuman</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>

	<section class="main">
		


		<!--navigation-->
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

		<!-- Konten-->

		<div class="konten">

			<!-- TABLE -->

			<center><p class="daftar-siswa2">Daftar siswa yang Lolos</p></center>
			<br>
			<table class="tbl-master">
				<tr class="head-tbl2">
					<td>No</td>
					<td>Nama</td>
					<td>Asal SMP</td>
					<td>Nilai</td>
					<td>Hasil</td>
				</tr>

				<?php $i=1; ?>
				<?php foreach($ambil as $row): ?>
					<tr class="conten-tbl">
						<td><?php echo $i; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['asal_sekolah']; ?></td>
						<td><?php echo $row['nilai']; ?></td>
						<td><?php echo $row['hasil']; ?></td>
						
					</tr>
					<?php $i++; ?>
				<?php endforeach; ?>
			</table>
		</div>

		
	</section>
	<!--footer-->
	<footer>
		<div class="timing">
			<!--kontak-->
			<div class="office-number">
				<h3>Hubungi kami di:</h3>
				<p>Telepon : <font>(027) 325 890</font> dan <font>08123567910</font> (Selama jam kerja)</p>
				<p>Email : <font>neohighschool@sch.id</font></p>
			</div>
			<!--jam kerja-->
			<div class="office-time">
				<h3>Jam Kerja</h3>
				<p>Senin-Jumat <font>08.00-16.00</font> WIB</p>
			</div>
		</div>
		<!---icon medsos-->
		<div class="icon">
			<a href="https://www.instagram.com/">
				<img src="image/instagram.png">
			</a>
			<a href="https://twitter.com/">
				<img src="image/twitter.png">
			</a>
			<a href="https://facebook.com/">
				<img src="image/facebook.png">
			</a>
		</div>

	</footer>

</body>
</html>