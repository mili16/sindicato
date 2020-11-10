<?php
require('../../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
   // Arial bold 15
    $this->SetFont('Arial','B',13);

    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Afiliados',0,0,'C');
    // Salto de línea
    $this->Ln(20);

  	$this->Cell(50, 8, 'Nombre', 1, 0, 'C', 0);
	$this->Cell(70, 8, 'Apellido', 1, 0, 'C', 0);
	$this->Cell(30, 8, 'Dni', 1, 0, 'C', 0);
	$this->Cell(30, 8, 'Area', 1, 1, 'C', 0);
	
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}



// hoja
require '../../conexion.php';
$consulta="SELECT * FROM afiliado ORDER BY afiliado.ape_afiliado ASC";
$resultado=$conexion->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',9);

while ($row = $resultado->fetch_assoc()) {
	$pdf->Cell(50, 8,utf8_decode($row['nom_afiliado']), 1, 0, 'L', 0);
	$pdf->Cell(70, 8, utf8_decode($row['ape_afiliado']), 1, 0, 'L', 0);
	$pdf->Cell(30, 8, $row['dni_afiliado'], 1, 0, 'C', 0);
	$pdf->Cell(30, 8, utf8_decode( $row['area_trabajo']), 1, 1, 'C', 0);
	}
$pdf->Output();
?>