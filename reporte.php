<?php
require('pdf/fpdf.php');



class PDF extends FPDF
{
// Cabecera de página
function Header ()
{
    // Logo

    // Arial bold 15
    $this->SetFont('Arial','B',8);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(200,25,'VENTAS',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(9,8,  'id',1,0, 'c',0);
    $this->cell(45,8, 'fecha',1,0, 'c',0);
    $this->cell(20,8, 'total',1,1, 'c',0);
   
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

include 'conexion.php';


$consulta = "select * from venta";
$resultado2 = $mysqli->query($consulta);




$pdf = new PDF('L', 'mm', 'LEGAL', true, 'UTF-8', false);

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',7);
while ($row=$resultado2->fetch_assoc()) {

  $pdf->cell(9,8, $row['id'],1,0, 'c',0);
  $pdf->cell(45,8, $row['fecha'],1,0, 'c',0);
  $pdf->cell(20,8, $row['total'],1,1, 'c',0);
 
}

$pdf->Output();
$pdf->heade();

?>
