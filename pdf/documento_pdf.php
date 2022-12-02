<?php
require('./pdf/fpdf.php');

class PDF extends FPDF
{
   function Header()
   {
    $this->SetFont('Arial','B',7);
    $this->Cell(-7);
    $this->Cell(90,7,'USUARIOS REGISTRADOS',0,0,'C');
    $this->Ln(19);
   }
   
   function Footer()
   {
    $this->SetY(-18);
    $this->SetFont('Arial','',8);
    $this->Cell(0,7,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    $this->Ln();
   }


   function TablaSimple($header)
   {
    foreach($header as $col)
    $this->Cell(18,7,$col,1);
    $this->Ln();
   
      $this->Cell(8,9,"ID",1);
      $this->Cell(18,9,"Tipo doc.",1);
      $this->Cell(18,9,"Documento",1);
      $this->Cell(8,9,"DV",1);
      $this->Cell(18,9,"Pri. nombre",1);
      $this->Cell(18,9,"Seg. nombre",1);
      $this->Cell(18,9,"Pri. apellido",1);
      $this->Cell(18,9,"Seg. apellido",1);
      $this->Cell(18,9,"F. Nacimiento",1);
      $this->Cell(18,9,utf8_decode("Razón social"),1);
      $this->Cell(32,9,utf8_decode("Dirección"),1);
      $this->Cell(18,9,"Celular",1);
      $this->Cell(18,9,utf8_decode("Teléfono"),1);
      $this->Cell(32,9,"Email",1);
      $this->Cell(18,9,"Tipo tercero",1);
      $this->Ln();

      
   }
}

require 'cn.php';
$consulta = "SELECT * FROM usuario";
$resultado = pg_query($consulta);

$pdf = new PDF('L','mm','A4');
$header=$resultado;
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetY(18);
$pdf->TablaSimple($header);

while($row=pg_fetch_array($resultado)){
   $pdf->Cell(8,7,$row['idusuario'],1,0,'C',0);
   $pdf->Cell(18,7,utf8_decode($row['tipo_documento']),1,0,'C',0);
   $pdf->Cell(18,7,$row['documento'],1,0,'C',0);
   $pdf->Cell(8,7,$row['dv'],1,0,'C',0);
   $pdf->Cell(18,7,utf8_decode($row['primer_nombre']),1,0,'C',0);
   $pdf->Cell(18,7,utf8_decode($row['segundo_nombre']),1,0,'C',0);
   $pdf->Cell(18,7,utf8_decode($row['primer_apellido']),1,0,'C',0);
   $pdf->Cell(18,7,utf8_decode($row['segundo_apellido']),1,0,'C',0);
   $pdf->Cell(18,7,$row['fecha_nacimiento'],1,0,'C',0);
   $pdf->Cell(18,7,utf8_decode($row['razon_social']),1,0,'C',0);
   $pdf->Cell(32,7,utf8_decode($row['direccion']),1,0,'C',0);
   $pdf->Cell(18,7,$row['celular'],1,0,'C',0);
   $pdf->Cell(18,7,$row['telefono'],1,0,'C',0);
   $pdf->Cell(32,7,utf8_decode($row['email']),1,0,'C',0);
   $pdf->Cell(18,7,utf8_decode($row['tipo_tercero']),1,0,'C',0);
   $pdf->Ln();
}

$pdf->Output();
?>



