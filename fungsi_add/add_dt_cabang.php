<?php  
	require '../config/koneksi_db.php';

	$namaCabang = htmlspecialchars(ucwords($_POST['cabang']));
	$penJawab = htmlspecialchars(ucwords($_POST['penanggungjawab']));
	$jmlanggota = htmlspecialchars(ucwords($_POST['jumlahanggota']));

	// cek nama apakah sudah terinput / belum
	$cekcabang = "SELECT * FROM dt_cabang WHERE Nama_cabang = '$namaCabang'";
	$hasil = mysqli_query($koneksi, $cekcabang);
	$data = mysqli_fetch_assoc($hasil);

	if ($namaCabang == $data['Nama_cabang']) {
		echo "<script>
	        alert('Nama cabang sudah ada!');
        	window.location.assign('../index.php?halaman=dt_cabang');  
      	</script>";
		// header('Location: ../index.php?halaman=dt_anggota&halaman=duplikasi');
	} 
	else {
		$sql = "INSERT INTO dt_cabang VALUES ('', '$namaCabang', '$penJawab', '$jmlanggota')";
		mysqli_query($koneksi, $sql);

		header('Location: ../index.php?halaman=dt_cabang');
	}

?>