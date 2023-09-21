<?php  
	require __DIR__ . '/../vendor/autoload.php';
	require '../config/koneksi_db.php';

	$show = "SELECT * FROM dt_keuangan INNER JOIN dt_anggota ON dt_keuangan.ID_anggota = dt_anggota.ID_anggota";
	$showData = mysqli_query($koneksi, $show);

	$mpdf = new \Mpdf\Mpdf();
	$header = '	<div style="border-bottom: 1px solid black; padding-bottom: 5px;">
					<img src="../logo/pencaksilat.png" alt="Satria Bangsa" width="120" style="float: left;">
					<h1 style="float: right; text-align: right; font-size: 24px;">Perguruan Pencak Silat<br>Satria Bangsa</h1>		
				</div>';

	$text = '<p><b>Laporan Keuangan</b></p>';

	$table = '<table border="1" cellspacing="0" cellpadding="8" style="width: 100%; font-size: 13px; text-align: center;">
					<tr>
						<th>ID Keuangan</th>
            <th>Tanggal Pembayaran</th>
            <th>Nominal</th>
            <th>Keterangan</th>
            <th>Nama Anggota</th>
            <th>ID Anggota</th>
					</tr>';

					while($data = mysqli_fetch_assoc($showData)) :
					$table .= '	<tr>
									<td>'. $data['ID_keuangan'] .'</td>
									<td>'. $data['Tanggal_Pembayaran'] .'</td>
									<td>'. $data['Nominal'] .'</td>
									<td>'. $data['Keterangan'] .'</td>
									<td>'. $data['Nama_lengkap'] .'</td>
									<td>'. $data['ID_anggota'] .'</td>
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
	$mpdf->Output('Laporan_Keuangan.pdf', \Mpdf\Output\Destination::INLINE);

?>