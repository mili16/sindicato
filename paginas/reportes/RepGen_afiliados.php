<?php
require('../../fpdf/fpdf.php');

class PDF extends FPDF
{
    
// Cabecera de página
function Header()
{
   // Arial bold 15
    $this->SetFont('times','B',13);

    // Movernos a la derecha
    $this->Cell(107);
    // Título
    $this->Cell(70,10,'Reporte General de Afiliados',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(50, 8, 'Apellidos', 1, 0, 'C', 0);
  	$this->Cell(50, 8, 'Nombres', 1, 0, 'C', 0);
	$this->Cell(27, 8, 'Dni', 1, 0, 'C', 0);
    $this->Cell(27, 8, 'Celular', 1, 0, 'C', 0);
	$this->Cell(30, 8, 'Area', 1, 0, 'C', 0);
    $this->Cell(54, 8, 'Categoria/Cargo', 1, 0, 'C', 0);
    $this->Cell(40, 8, 'Ingreso a CMC', 1, 1, 'C', 0);
	
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

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',9);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(50, 8, utf8_decode($row['ape_afiliado']), 1, 0, 'L', 0);
	$pdf->Cell(50, 8,utf8_decode($row['nom_afiliado']), 1, 0, 'L', 0);
	$pdf->Cell(27, 8, $row['dni_afiliado'], 1, 0, 'C', 0);
    $pdf->Cell(27, 8, $row['telefono'], 1, 0, 'C', 0);
	$pdf->Cell(30, 8, utf8_decode( $row['area_trabajo']), 1, 0, 'L', 0);
    $pdf->Cell(54, 8, utf8_decode( $row['categoria_o_cargo']), 1, 0, 'L', 0);
    $pdf->Cell(40, 8, $row['fech_ingreso_empresa'], 1, 1, 'C', 0);
	}
$pdf->Output();
?>