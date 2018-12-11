<?php 
require('dbcon.php');

$feeId=$_GET['id'];

$query=mysqli_query($dbcon,"SELECT * from tblfees WHERE feeId = '$feeId' ") or die(mysqli_error($dbcon));
$row=mysqli_fetch_array($query);


require('fpdf181/fpdf.php');
	$pdf=new FPDF();
	$pdf->Addpage();
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(10,10,'Resit Pembayaran Yuran');
	$pdf->Ln();
	$pdf->SetFont('Arial','',18);
	$pdf->Cell(60,10,'Id Yuran:',1);
	$pdf->Cell(80,10,$feeId,1);
	$pdf->Ln();
	$pdf->SetFont('Arial','',18);
	$pdf->Cell(60,10,'Id Pelajar:',1);
	$pdf->Cell(80,10,$row['studentId'],1);
	$pdf->Ln();
	$pdf->SetFont('Arial','',18);
	$pdf->Cell(60,10,'Tarikh:',1);
	$pdf->Cell(80,10,$row['feeDate'],1);
	$pdf->Ln();
	$pdf->SetFont('Arial','',18);
	$pdf->Cell(60,10,'Status Bayaran:',1);
	$pdf->Cell(80,10,$row['status'],1);
	$pdf->Ln();
	$pdf->SetFont('Arial','',18);
	$pdf->Cell(60,10,'Jumlah (RM):',1);
	$pdf->Cell(80,10,$row['amount'],1);

	$pdf->SetXY(3, 80); // position of text3
	$pdf->Write(0, 'Sila simpan resit ini untuk kegunaan masa depan. Terima Kasih');
	$pdf->output();
 

?>