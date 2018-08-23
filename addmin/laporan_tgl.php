<?php
include 'config.php';
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'Pendaftaran UJI Kendaraan',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 0038XXXXXXX',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. Anggrek',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.dishubpyk.com email : dishubpyk@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data pendaftaran Pertama Kali",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->Cell(6,0.7,"Laporan Penjualan pada : ".$_GET['tgl_pendaftaran'],0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'No Kendaraan', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'No STNK', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'No Mesin', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Merk Kendaraan', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Jenis Kendaraan', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Tanggal Pendaftaran', 1, 1, 'C');
$pdf->SetFont('Arial','',10);

$no=1;
$tanggal=$_GET['tgl_pendaftaran'];
// $pdf->Cell(1, 0.8, date($dari), 1, 0, 'C');
$query=mysql_query("select * from pendaftaran  where tgl_pendaftaran=" . $tanggal);
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['no_kendaraan'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['no_stnk'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['no_mesin'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['merk_kend'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['jenis_kend'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['tgl_pendaftaran'], 1, 1,'C');

	$no++;
}


$pdf->Output("laporan.pdf","I");

?>

