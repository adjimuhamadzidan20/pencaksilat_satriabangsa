<?php
	// koneksi database 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'perguruan_pencaksilat';

	$koneksi = mysqli_connect($host, $user, $pass, $database);

	// cek koneksi
	if (!$koneksi) {
		die('koneksi gagal ' . mysqli_connect_error());
	}

?>