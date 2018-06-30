<?php
// call library FPDF
require('fpdf.php');
// intance object and setting PDF Form
$pdf = new FPDF('l','mm','A5');
// create new form
$pdf->AddPage();
// setting font style
$pdf->SetFont('Arial','B',16);
// print string 
$pdf->Cell(190,7,'CLASSES LISTS',0,1,'C');
$pdf->SetFont('Arial','B',12);
 
// give a space between paragraf
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NO',1,0);
$pdf->Cell(85,6,'NAMA',1,0);
$pdf->Cell(27,6,'GENDER',1,0);
$pdf->Cell(25,6,'CLASS',1,1);
 
$pdf->SetFont('Arial','',10);
 
include 'dbcon.php';
$sql = mysqli_query($MySQLiconn, "SELECT * FROM class_tbl");
while ($row = mysqli_fetch_array($sql)){
    $pdf->Cell(20,6,$row['id_class'],1,0);
    $pdf->Cell(85,6,$row['class'],1,0);
    $pdf->Cell(27,6,$row['teacher'],1,0);
    $pdf->Cell(25,6,$row['student'],1,1); 
}
 
$pdf->Output();
?>