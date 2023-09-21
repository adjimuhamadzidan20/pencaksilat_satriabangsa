<?php  
	require __DIR__ . '/../vendor/autoload.php';
	require '../config/koneksi_db.php';

	$show = "SELECT * FROM dt_cabang";
	$showData = mysqli_query($koneksi, $show);

	$mpdf = new \Mpdf\Mpdf();
	$header = '	<div style="border-bottom: 1px solid black; padding-bottom: 5px;">
					<img src="../logo/pencaksilat.png" alt="Satria Bangsa" width="120" style="float: left;">
					<h1 style="float: right; text-align: right; font-size: 24px;">Perguruan Pencak Silat<br>Satria Bangsa</h1>		
				</div>';

	$text = '<p><b>Laporan Cabang</b></p>';

	$table = '<table border="1" cellspacing="0" cellpadding="8" style="width: 100%; text-align: center;">
					<tr>
						<th>ID Cabang</th>
						<th>Nama Cabang</th>
						<th>Penanggung Jawab</th>
						<th>Jumlah Anggota</th>
					</tr>';

					while($data = mysqli_fetch_assoc($showData)) :
					$table .= '	<tr>
									<td>'. $data['ID_cabang'] .'</td>
									<td>'. $data['Nama_cabang'] .'</td>
									<td>'. $data['Penanggung_jawab'] .'</td>
									<td>'. $data['Jumlah_anggota'] .'</td>
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
	$mpdf->Output('Laporan_Cabang.pdf', \Mpdf\Output\Destination::INLINE);

?>