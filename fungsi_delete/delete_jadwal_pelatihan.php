<?php  
	require '../config/koneksi_db.php';
	
	$idJadwal = $_GET['id'];
	$sql = "DELETE FROM dt_jadwal_latihan WHERE ID_latihan = $idJadwal";
	mysqli_query($koneksi, $sql);

	header('Location: ../index.php?halaman=dt_jadwal_pelatihan');

?>