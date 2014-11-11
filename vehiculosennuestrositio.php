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
$pdf->Cell(0, 130, 'Registro de vehiculos en nuestro sitio', 0, 1, 'C');
$pdf->SetXY(180,30);
$pdf->cell(0, 90, 'Fecha:'.$fecha, 0, 0, 'C');

//DATOS DE CONECCION
//mysql_connect("localhost","root","123456");
//mysql_select_db("persona");

//MOSTRAMOS LA TABLA
//DATOS DE LA TABLA
$pdf->SetTextColor(0x00, 0x00, 0x00);
$pdf->SetFont("Arial", "b", 9);
$pdf->SetTextColor(100, 100, 100);

$pdf->SetXY(20,90);
$pdf->Cell(40, 10, "Tipo vehiculo",1,0, 'C');
$pdf->Cell(24, 10, "Combustible",1,0, 'C');
$pdf->Cell(24, 10, "Transmision",1,0, 'C');
$pdf->Cell(20, 10, "Aire Acond.",1,0, 'C');
$pdf->Cell(24, 10, "Motor",1,0, 'C');
$pdf->Cell(24, 10, "Valor",1,o, 'C');
$pdf->Cell(24, 10, "Rent a Car",1,1, 'C');



if ($sql=mysql_query("SELECT id_tipo_vehiculo,id_tipo_combustible,id_transmision, aire_acondicionado_vehiculo,cilindrada_motor,valor_vehiculo,id_sucursal FROM vehiculo order by valor_vehiculo")){
while($row=mysql_fetch_array($sql))
{	
	$tpVehiculo=$row['id_tipo_vehiculo'];
	$combus=$row['id_tipo_combustible'];
	$trans=$row['id_transmision'];
	$aire=$row['aire_acondicionado_vehiculo'];
	$motor=$row['cilindrada_motor'];
	$valor=$row['valor_vehiculo'];
	$sucursal=$row['id_sucursal'];
	
	
		$sql0="SELECT nombre_tipo_vehiculo FROM tipo_vehiculo where id_tipo_vehiculo ='$tpVehiculo'";
						 $rec=mysql_query($sql0);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $tpVehiculo=$row['nombre_tipo_vehiculo'];
							}
		$sql1="SELECT nombre_tipo_combustible FROM tipo_combustible where id_tipo_combustible ='$combus'";
						 $rec=mysql_query($sql1);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $combus=$row['nombre_tipo_combustible'];
							}
		$sql3="SELECT nombre_transmision FROM transmision where id_transmision ='$trans'";
						 $rec=mysql_query($sql3);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $trans=$row['nombre_transmision'];
							}
		$sql4="SELECT nombre_rentacar FROM rentacar, sucursal where rentacar.id_rentacar = sucursal.id_rentacar AND id_sucursal ='$sucursal'";
						 $rec=mysql_query($sql4);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $nombreRen=$row['nombre_rentacar'];
							}


	$pdf->Cell(40, 5, $tpVehiculo,1,0, 'C');
	$pdf->Cell(24, 5, $combus,1,0, 'C');
	$pdf->Cell(24, 5, $trans,1,0, 'C');
	$pdf->Cell(20, 5, $trans,1,0, 'C');
	$pdf->Cell(24, 5, $motor,1,0, 'C');
	$pdf->Cell(24, 5, $valor,1,0, 'C');
	$pdf->Cell(24, 5, $nombreRen,1,1, 'C');

}
	
$pdf->Output();//("RegistroVehiculos.pdf","d");
}else {
		echo "La base de datos no posee registross";
		}




//$pdf->Output("Contrato_".$per_Rut."-".$per_DV.".pdf","D");



?>
