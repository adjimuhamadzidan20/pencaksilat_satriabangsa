<?php  
	if (isset($_GET['halaman'])) {
		if ($_GET['halaman'] == 'dashboard') {
		require 'pages/dashboard.php';
		}
		else if ($_GET['halaman'] == 'dt_anggota') {
			require 'pages/data_anggota.php';
		}
		else if ($_GET['halaman'] == 'dt_cabang') {
			require 'pages/data_cabang.php';
		}
		else if ($_GET['halaman'] == 'dt_pelatih') {
			require 'pages/data_pelatih.php';
		}
		else if ($_GET['halaman'] == 'dt_keuangan') {
			require 'pages/data_keuangan.php';
		}
		else if ($_GET['halaman'] == 'dt_jadwal_pelatihan') {
			require 'pages/data_jadwal_pelatihan.php';
		} 
		else if ($_GET['halaman'] == 'edit_dt_anggota') {
			require 'fungsi_edit/edit_dt_anggota.php';
		} 
		else if ($_GET['halaman'] == 'edit_dt_cabang') {
			require 'fungsi_edit/edit_dt_cabang.php';
		} 
		else if ($_GET['halaman'] == 'edit_dt_keuangan') {
			require 'fungsi_edit/edit_dt_keuangan.php';
		} 
		else if ($_GET['halaman'] == 'edit_dt_pelatih') {
			require 'fungsi_edit/edit_dt_pelatih.php';
		} 
		else if ($_GET['halaman'] == 'edit_jadwal_pelatihan') {
			require 'fungsi_edit/edit_jadwal_pelatihan.php';
		} 
		else {
			require 'pages/error_404.php';
		}
	} else {
		require 'pages/dashboard.php';
	}	

?>