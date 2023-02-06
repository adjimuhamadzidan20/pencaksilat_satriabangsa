<?php  
	require '../config/koneksi_db.php';

	$tglPembayaran = htmlspecialchars($_POST['tglpembayaran']);
	$nominal = htmlspecialchars($_POST['nominal']);
	$keterangan = htmlspecialchars($_POST['keterangan']);
	$idanggota = htmlspecialchars($_POST['idanggota']);

	$sql = "INSERT INTO dt_keuangan VALUES ('', '$tglPembayaran', '$nominal', '$keterangan', '$idanggota')";
	mysqli_query($koneksi, $sql);

	header('Location: ../index.php?halaman=dt_keuangan');
?>