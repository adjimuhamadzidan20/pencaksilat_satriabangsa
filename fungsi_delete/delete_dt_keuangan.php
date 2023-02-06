<?php  
	require '../config/koneksi_db.php';
	
	$idKeuangan = $_GET['id'];
	$sql = "DELETE FROM dt_keuangan WHERE ID_keuangan = $idKeuangan";
	mysqli_query($koneksi, $sql);

  header('Location: ../index.php?halaman=dt_keuangan');
  
?>