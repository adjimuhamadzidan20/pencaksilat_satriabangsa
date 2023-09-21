<?php  
	require 'koneksi_db.php';

	function showingData($sql) {
    global $koneksi;

    $querydata = mysqli_query($koneksi, $sql);
    $array = [];
    while ($data = mysqli_fetch_assoc($querydata)) {
      $array [] = $data;
    }

    return $array;
  }

?>