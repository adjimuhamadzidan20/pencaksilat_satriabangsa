<?php  
	require '../config/koneksi_db.php';
	
	$idAnggota = $_GET['id'];
	$sql = "DELETE FROM dt_anggota WHERE ID_anggota = $idAnggota";
	mysqli_query($koneksi, $sql);

  header('Location: ../index.php?halaman=dt_anggota');

?>