<?php
require('../../fpdf/fpdf.php');

class PDF extends FPDF
{
    
// Cabecera de página
function Header()
{
   // Arial bold 15
    $this->SetFont('times','B',9);

    // Movernos a la derecha
    $this->Cell(107);
    // Título
    $this->Cell(70,10,'Reporte General Talleres',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(45, 8, 'Apellidos Afiliado', 1, 0, 'C', 0);
  	$this->Cell(40, 8, 'Nombres Afiliado', 1, 0, 'C', 0);
    $this->Cell(45, 8, 'Apellidos Alumno', 1, 0, 'C', 0);
    $this->Cell(35, 8, 'Nombres Alumno', 1, 0, 'C', 0);
	$this->Cell(27, 8, 'Dni', 1, 0, 'C', 0);
    $this->Cell(27, 8, 'Parentesco', 1, 0, 'C', 0);
	$this->Cell(25, 8, 'Registro', 1, 0, 'C', 0);
    $this->Cell(36, 8, 'Taller', 1, 1, 'C', 0);
	
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
$consulta="SELECT * FROM alumnos ORDER BY alumnos.fech_registro ASC";
$resultado=$conexion->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8.5);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(45, 8, utf8_decode($row['ape_afiliado']), 1, 0, 'L', 0);
	$pdf->Cell(40, 8,utf8_decode($row['nom_afiliado']), 1, 0, 'L', 0);
        $pdf->Cell(45, 8, utf8_decode($row['ape_alum']), 1, 0, 'L', 0);
    $pdf->Cell(35, 8,utf8_decode($row['nom_alum']), 1, 0, 'L', 0);
	$pdf->Cell(27, 8, $row['dni_alum'], 1, 0, 'C', 0);
	$pdf->Cell(27, 8, utf8_decode( $row['familiar_alum']), 1, 0, 'L', 0);
    $pdf->Cell(25, 8, utf8_decode( $row['fech_registro']), 1, 0, 'L', 0);
    $pdf->Cell(36, 8, $row['nom_curso'], 1, 1, 'L', 0);
	}
$pdf->Output();
?>