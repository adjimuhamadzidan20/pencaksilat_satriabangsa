<?php  
	require __DIR__ . '/../vendor/autoload.php';
	require '../config/koneksi_db.php';

	$show = "SELECT * FROM dt_jadwal_latihan 
  INNER JOIN dt_pelatih ON dt_jadwal_latihan.ID_pelatih = dt_pelatih.ID_pelatih 
  INNER JOIN dt_cabang ON dt_jadwal_latihan.ID_cabang = dt_cabang.ID_cabang";

	$showData = mysqli_query($koneksi, $show);

	$mpdf = new \Mpdf\Mpdf();
	$header = '	<div style="border-bottom: 1px solid black; padding-bottom: 5px;">
					<img src="../logo/pencaksilat.png" alt="Satria Bangsa" width="120" style="float: left;">
					<h1 style="float: right; text-align: right; font-size: 24px;">Perguruan Pencak Silat<br>Satria Bangsa</h1>		
				</div>';

	$text = '<p><b>Laporan Jadwal Pelatihan</b></p>';

	$table = '<table border="1" cellspacing="0" cellpadding="8" style="width: 100%; text-align: center; font-size: 12px;">
					<tr>
						<th>ID Latihan</th>
            <th>Hari Latihan</th>
            <th>Nama Pelatih</th>
            <th>ID Pelatih</th>
            <th>Cabang</th>
            <th>ID Cabang</th>
					</tr>';

					while($data = mysqli_fetch_assoc($showData)) :
					$table .= '	<tr>
									<td>'. $data['ID_latihan'] .'</td>
									<td>'. $data['Hari'] .'</td>
									<td>'. $data['Nama_pelatih'] .'</td>
									<td>'. $data['ID_pelatih'] .'</td>
									<td>'. $data['Nama_cabang'] .'</td>
									<td>'. $data['ID_cabang'] .'</td>
								</tr>';
					endwhile;

				$table .= ' 
				</table>';

	$date = '<div style="text-align: right; margin-top:50px;">
			 	<p>Jakarta, '. date("d F Y") .'</p>
			 	<br><br>
			 	<p>Admin / Pengurus</p>
			 </div>';

	// $mpdf->SetFooter('Document Title');
	$mpdf->WriteHTML($header);
	$mpdf->WriteHTML($text);
	$mpdf->WriteHTML($table);
	$mpdf->WriteHTML($date);
	$mpdf->setFooter('Perguruan Pencak Silat Satria Bangsa || {PAGENO}');
	$mpdf->Output('Laporan_Jadwal.pdf', \Mpdf\Output\Destination::INLINE);

?>