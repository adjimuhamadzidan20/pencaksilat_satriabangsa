<?php  
  if (@$_GET['halaman'] == 'dashboard') {
    $active1 = 'active bg-secondary';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
    $active6 = '';
  } else if (@$_GET['halaman'] == 'dt_anggota') {
    $active1 = '';
    $active2 = 'active bg-secondary';
    $active3 = '';
    $active4 = '';
    $active5 = '';
    $active6 = '';
  } else if (@$_GET['halaman'] == 'dt_cabang') {
    $active1 = '';
    $active2 = '';
    $active3 = 'active bg-secondary';
    $active4 = '';
    $active5 = '';
    $active6 = '';
  } else if (@$_GET['halaman'] == 'dt_pelatih') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = 'active bg-secondary';
    $active5 = '';
    $active6 = '';
  } else if (@$_GET['halaman'] == 'dt_keuangan') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = 'active bg-secondary';
    $active6 = '';
  } else if (@$_GET['halaman'] == 'dt_jadwal_pelatihan') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
    $active6 = 'active bg-secondary';
  } else {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
    $active6 = '';
  }

?>