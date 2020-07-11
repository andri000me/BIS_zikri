<?php
//fungsi pengurangan tanggal periode akhir habis masa berjalan
$awal  = date_create($data['periode_akhir']);
$akhir = date_create(); // waktu sekarang
$diff  = date_diff($awal, $akhir );


$txt ='<html>
	<head>
		<title>
		</title>
	</head>
	<style>
		.perihal
		{
			margin-top : 30px;
		}
		.pembuka
		{
			margin-top: 30px;
		}
		.doa
		{
			margin-top: 20px;
		}
		.penutup
		{

		}

		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}

	</style>
	<body>
		<div class="perihal">
			<p>Perihal : Pemberitahuan Masa Sewa Kantor Cabang</p>
		</div>
		<div class="pembuka">
			<p><b>Kepada YTH.</b></p>
			<p><b>Bapak/Ibu '.$data['nama_rm'].'</b></p>
			<p><b>Regional '.$data['nama_regional'].'</b></p>
			<p><b>Ditempat</b></p>
		</div>
		<p>Assalamualaikum Wr Wb</p>
		<div class="doa">
			Doa senantiasa kami panjatkan semoga kita semua berada dalam keadaan sehat walafiat <br> dan selalu berada dalam lindungan Allah SWT serta kesuksesan senantiasa menyertai <br> aktivitas kita setiap hari. Aamiin.
		</div>
		<p>Bersama dengan ini kami informasikan kantor cabang di Regional '.$data['nama_regional'].' yang akan habis masa sewanya yaitu :</p>

		<table style="width:60%" border="1">
		  <tr>
		    <th>No</th>
		    <th>Cabang</th>
		    <th>Periode Awal</th>
        <th>Periode Akhir</th>
		    <th>Masa Sewa</th>
				<th>Sisa Sewa</th>
		  </tr>
		  <tr>
		  <td align="center">1</td>
		    <td align="center">'.$data['nama_kantor'].'</td>
		    <td align="center">'.date("d F Y",strtotime($data['periode_awal'])).'</td>
        <td align="center">'.date("d F Y",strtotime($data['periode_akhir'])).'</td>
		   	<td align="center">'.$data['masa_sewa'] .'</td>
				<td align="center">'.$diff->format('%m Bulan %d Hari').'</td>
		  </tr>
		</table>

		<p>Diminta kepada Sdr. Regional Manager untuk mengajukan pembelian/sewa untuk kantor<br> cabang yang akan habis masa sewanya kepada pengurus dengan melampirkan surat dan <br>proposal pengajuannya dengan melampirkan kelengkapan sebagai berikut :</p>

		<ol>
		  <li>FC Lengkap Sertifikat (SHM/SHGB)</li>
		  <li>FC KTP Pemilik (Suami & Istri)</li>
			<li>FC KK Pemilik (Kartu Keluarga)</li>
		  <li>FC Akta Nikah Pemilik</li>
			<li>FC Lengkap IMB(Izin Mendirikan Bangunan)</li>
			<li>FC PBB Terakhir</li>
			<li>FC Tagihan Terakhir (Listrik,Tlp,Internet,PDAM)</li>
			<li>Foto Gedung dan kondisi sekitar</li>
			<li>Contact Person Pemilik/dikuasakan</li>
			<li>Gedung Alternatif lain</li>
		</ol>

		<a href="http://localhost/new_sewakantor/view/frame.php?page=dokumen">email me</a>

		<div class="penutup">
			<p>Demikian informasi ini kami sampaikan untuk diketahui dan ditindaklanjuti. Atas perhatian<br>dan kerjasamanya kami ucapkan terimakasih.</p>
			<p>Wassalamualaikum Wr. Wb.</p>
			<p><b>Koperasi Simpan Pinjam Sejahtera Bersama</b></p>
			<br><b>Pengurus,</b>

			<br><br><br>
			<b><u>Vini Noviani, SS., SH.</u></b><br><b>Direktur Utama</b>
		</div>
	</body>
</html>';
?>
