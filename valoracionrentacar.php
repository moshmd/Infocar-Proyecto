<?php
@session_start(); 

require "fpdf/fpdf.php";
include "codigosPHP/conexion.php";
$fecha = date('d/m/Y');

class PDF extends FPDF
{
}

//DELCARACION DE LA HOJA
$pdf=new PDF('P', 'mm', 'Letter');
$pdf->SetMargins(20, 18);
$pdf->AliasNbPages();
$pdf->AddPage();

//HEADER 
$pdf->Line(19, 35, 210, 35);
$pdf->Line(19, 71, 210, 71);
//Imagen derecha
$pdf->Image('imagenesPDF/logo1.png', 60, 15, 95, 15, 'PNG');

$pdf->Image('imagenesPDF/Avis.jpg', 20, 37, 47, 15, 'JPG');
$pdf->Image('imagenesPDF/Verschae.jpg', 20, 55, 47, 15, 'JPG');

$pdf->Image('imagenesPDF/Econorent.jpg', 67, 37, 47, 15, 'JPG');
$pdf->Image('imagenesPDF/Rentazoom.jpg', 67, 55, 47, 15, 'JPG');

$pdf->Image('imagenesPDF/First.jpg', 114, 37, 47, 15, 'JPG');
$pdf->Image('imagenesPDF/Rentacar.jpg', 114, 55, 47, 15, 'JPG');

$pdf->Image('imagenesPDF/Europcar.jpg', 162, 37, 47, 15, 'JPG');
$pdf->Image('imagenesPDF/Hertz.jpg', 162, 53, 47, 15, 'JPG');



//DATOS DEL TITULO
$pdf->SetTextColor(0x00, 0x00, 0x00);
$pdf->SetFont("Arial", "b", 15);
$pdf->Cell(0, 130, 'Resumen de notas de satisfacción de cliente por Sucursal', 0, 1, 'C');
$pdf->SetXY(180,30);
$pdf->cell(0, 90, 'Fecha:'.$fecha, 0, 0, 'C');

//DATOS DE CONECCION
//mysql_connect("localhost","root","123456");
//mysql_select_db("persona");

//MOSTRAMOS LA TABLA
//DATOS DE LA TABLA
$pdf->SetTextColor(0x00, 0x00, 0x00);
$pdf->SetFont("Arial", "b", 10);
$pdf->SetTextColor(100, 100, 100);

$pdf->SetXY(20,95);

$pdf->Cell(35, 6, "Nombre Rentacar",1,0, 'C');
$pdf->Cell(50, 6, "Nombre Comuna",1,0, 'C');
$pdf->Cell(60, 6, "Nombre Sucursal",1,0, 'C');
$pdf->Cell(35, 6, "Nota Sucursal",1,1, 'C');


if ($sql=mysql_query("SELECT nombre_rentacar,nombre_comuna, nombre_sucursal, nota_evalua
						FROM sucursal, evalua, rentacar, comuna
						WHERE sucursal.id_sucursal = evalua.id_sucursal
						AND rentacar.id_rentacar = sucursal.id_rentacar
						AND sucursal.id_comuna = comuna.id_comuna
						ORDER BY  `rentacar`.`nombre_rentacar` ASC")){
while($row=mysql_fetch_array($sql))
	{	
		$pdf->Cell(35, 7, $row['nombre_rentacar'],1,0, 'C');
		$pdf->Cell(50, 7, $row['nombre_comuna'],1,0, 'C');
		$pdf->Cell(60, 7, $row['nombre_sucursal'],1,0, 'C');
		$pdf->Cell(35, 7, $row['nota_evalua'],1,1, 'C');
	}
$pdf->Output();//("RegistroVehiculos.pdf","d");
}else {
		echo "La base de datos no posee registross";
		}




//$pdf->Output("Contrato_".$per_Rut."-".$per_DV.".pdf","D");



?>
