<?php  
	require '../config/koneksi_db.php';
	
	$idCabang = $_GET['id'];
	$sql = "DELETE FROM dt_cabang WHERE ID_cabang = $idCabang";
	mysqli_query($koneksi, $sql);

	header('Location: ../index.php?halaman=dt_cabang');

?>