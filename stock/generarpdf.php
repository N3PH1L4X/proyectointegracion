<?php

include('database.php');
$database = new Database();
$result = $database->runQuery("SELECT * FROM productos");
$header = $database->runQuery("SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='bddcesfam'
AND `TABLE_NAME`='productos' and `COLUMN_NAME`
in ('id','nombreProducto','fabricaProducto','descripcionProducto','cantidadProducto','gramajeProducto')");

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',13);

$pdf->Cell(33,12,'ID',1,0,'C',false);
$pdf->Cell(33,12,'Nombre',1,0,'C',false);
$pdf->Cell(33,12,'Fabrica',1,0,'C',false);
$pdf->Cell(33,12,'Descripcion',1,0,'C',false);
$pdf->Cell(33,12,'Cantidad',1,0,'C',false);
$pdf->Cell(33,12,'Gramaje',1,0,'C',false);

$pdf->SetFont('Arial','',10);

foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(33,12,$column,1);
}
$pdf->Output();
?>