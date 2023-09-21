<?php
	require '../config/koneksi_db.php';
	  
	$namaAnggota = htmlspecialchars(ucwords($_POST['nama_anggota']));
	$jenisKelamin = htmlspecialchars($_POST['jenis_kelamin']);
	$alamat = htmlspecialchars(ucwords($_POST['alamat']));
	$sabuk = htmlspecialchars($_POST['sabuk']);

	// cek nama apakah sudah terinput / belum
	$ceknama = "SELECT * FROM dt_anggota WHERE Nama_lengkap = '$namaAnggota'";
	$hasil = mysqli_query($koneksi, $ceknama);
	$data = mysqli_fetch_assoc($hasil);

	if ($data) {
		echo "<script>
	        alert('Nama anggota sudah ada!');
        	window.location.assign('../index.php?halaman=dt_anggota');  
      	</script>";
	} 
	else {
		$sql = "INSERT INTO dt_anggota VALUES ('', '$namaAnggota', '$jenisKelamin', '$alamat', '$sabuk')";
		mysqli_query($koneksi, $sql);

		header('Location: ../index.php?halaman=dt_anggota');
	}

?>