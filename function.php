<?php 

	// Deklarasi Koneksi
$koneksi=mysqli_connect("localhost","root","","db_dpw");

// Select
function query($query){
	global $koneksi;

	$ambil=mysqli_query($koneksi,$query);
	$rows=[];

	while ($row=mysqli_fetch_assoc($ambil)) {
		$rows[]=$row;
	}

	return $rows;
}

function tambah($data){
	global $koneksi;

	$nama=htmlspecialchars($data["nama"]);
	$alamat=htmlspecialchars($data["alamat"]);
	$jk=htmlspecialchars($data["jk"]);
	$asal=htmlspecialchars($data["asal_sekolah"]);
	$nilai=htmlspecialchars($data["nilai"]);
	$hasil=htmlspecialchars($data["hasil"]);


	$query="INSERT INTO siswa (id,nama,alamat,jk,asal_sekolah,nilai)
	VALUES
	('','$nama','$alamat','$jk','$asal','$nilai')

	";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
}

function hapus($id){
	global $koneksi;

	mysqli_query($koneksi,"DELETE FROM siswa WHERE id=$id");

	return mysqli_affected_rows($koneksi);
}

function ubah($data){
	global $koneksi;

	$id=$data["id"];
	$nama=htmlspecialchars($data["nama"]);
	$alamat=htmlspecialchars($data["alamat"]);
	$jk=htmlspecialchars($data["jk"]);
	$asal=htmlspecialchars($data["asal_sekolah"]);
	$nilai=htmlspecialchars($data["nilai"]);
	$hasil=htmlspecialchars($data["hasil"]);

	$query="UPDATE siswa SET
	nama='$nama',
	alamat='$alamat',
	jk='$jk',
	asal_sekolah='$asal',
	nilai='$nilai',
	hasil='$hasil'
	WHERE id='$id';

	";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);


}

?>