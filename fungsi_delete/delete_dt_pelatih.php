<?php  
	require '../config/koneksi_db.php';
	
	$idPelatih = $_GET['id'];
	$sql = "DELETE FROM dt_pelatih WHERE ID_pelatih = $idPelatih";
	mysqli_query($koneksi, $sql);

	header('Location: ../index.php?halaman=dt_pelatih');

?>