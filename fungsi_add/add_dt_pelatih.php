<?php  
	require '../config/koneksi_db.php';

	$namaPelatih = htmlspecialchars(ucwords($_POST['pelatih']));
	$tglLahir = htmlspecialchars($_POST['tgllahir']);
	$jenKelamin = htmlspecialchars($_POST['jen_kelamin']);
	$sabuk = htmlspecialchars($_POST['sabuk']);

	// cek nama apakah sudah terinput / belum
	$cekpelatih = "SELECT * FROM dt_pelatih WHERE Nama_pelatih = '$namaPelatih'";
	$hasil = mysqli_query($koneksi, $cekpelatih);
	$data = mysqli_fetch_assoc($hasil);

	if ($namaPelatih == $data['Nama_pelatih']) {
		echo "<script>
	        alert('Nama pelatih sudah ada!');
        	window.location.assign('../index.php?halaman=dt_pelatih');  
      	</script>";
		// header('Location: ../index.php?halaman=dt_anggota&halaman=duplikasi');
	} 
	else {
		$sql = "INSERT INTO dt_pelatih VALUES ('', '$namaPelatih', '$tglLahir', '$jenKelamin', '$sabuk')";
		mysqli_query($koneksi, $sql);

		header('Location: ../index.php?halaman=dt_pelatih');
	}
?>