<?php
include 'koneksi.php';
$cabang = mysqli_query($connect, "SELECT * FROM kantor_cabang");
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',14);
// mencetak string
$pdf->Cell(190,7,'KOPERASI SEJAHTERA BERSAMA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR DATA GEDUNG CABANG',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(55,4,'NAMA KANTOR',1,0);
$pdf->Cell(40,4,'PERJANJIAN SEWA',1,0);
$pdf->Cell(30,4,'MASA SEWA',1,0);
$pdf->Cell(30,4,'BIAYA NOTARIS',1,1);


$pdf->SetFont('Arial','',10);

while ($row = mysqli_fetch_array($cabang)){
    $pdf->Cell(55,4,$row['nama_kantor'],1,0);
    $pdf->Cell(40,4,$row['perjanjian_sewa'],1,0);
    $pdf->Cell(30,4,$row['masa_sewa'],1,0);
    $pdf->Cell(30,4,$row['biaya_notaris'],1,1);
}

$pdf->Output();
?>
