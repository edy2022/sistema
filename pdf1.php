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
    $this->Cell(200,25,'INFORME DE CLIENTES',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(9,8,  'id',1,0, 'c',0);
    $this->cell(60,8, 'nombre',1,0, 'c',0);
    $this->cell(65,8, 'cantidad',1,0, 'c',0);
    $this->cell(56,8, 'precio',1,0, 'c',0);
    $this->cell(30,8, 'subtotal',1,0, 'c',0);
  $this->cell(20,8, 'stock',1,0, 'c',0);  
  $this->cell(20,8, 'fecha',1,1, 'c',0); 
	
	
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

require 'conexion.php';


$consulta = "select d.id,p.nombre,d.cantidad, d.subtotal, p.precio,p.stock,v.fecha
from detalle d, producto p, venta v
where d.producto = p.id and
d.venta ";




$resultado2 = $mysqli->query($consulta);




$pdf = new PDF('L', 'mm', 'LEGAL', true, 'UTF-8', false);

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',7);
while ($row=$resultado2->fetch_assoc()) {

  $pdf->cell(9,8, $row['id'],1,0, 'c',0);
  $pdf->cell(60,8, $row['nombre'],1,0, 'c',0);
  $pdf->cell(65,8, $row['cantidad'],1,0, 'c',0);
  $pdf->cell(56,8, $row['precio'],1,0, 'c',0);
  $pdf->cell(30,8, $row['subtotal'],1,0, 'c',0);
  $pdf->cell(20,8, $row['stock'],1,0, 'c',0); 
  $pdf->cell(20,8, $row['fecha'],1,1, 'c',0); 
  
 
}

$pdf->Output();
$pdf->heade();

?>
