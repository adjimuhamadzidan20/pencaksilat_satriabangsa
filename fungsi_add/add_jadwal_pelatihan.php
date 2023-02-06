<?php  
	require '../config/koneksi_db.php';

	$hariLatihan = htmlspecialchars(ucwords($_POST['hari']));
	$idpelatih = htmlspecialchars($_POST['pelatih']);
	$idcabang = htmlspecialchars($_POST['cabang']);

	$sql = "INSERT INTO dt_jadwal_latihan VALUES ('', '$hariLatihan', '$idpelatih', '$idcabang')";
	mysqli_query($koneksi, $sql);

	header('Location: ../index.php?halaman=dt_jadwal_pelatihan');

?>