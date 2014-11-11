<?php include ("conexion.php");

$rentacar=$_POST['rentacar'];
$Nsucursal=$_POST['sucursal'];
$Dsucursal=$_POST['direccion'];
$comuna=$_POST['comuna'];

if ($rentacar=="" or $rentacar="0" or $Nsucursal=="" or $Dsucursal=="" or $comuna==""){
	echo '<script languaje = javascript> 
		alert("Por favor ingrese todos los datos")
		location = "../ingresar_sucursal.php"
		</script>';

	
}else{
$sql=mysql_query ("insert into sucursal value ('".$id."','".$comuna."','".$rentacar."','".$Nsucursal."','".$Dsucursal."')");

echo '<script languaje = javascript> 
		alert("Ingresado Correctamente")
		location = "../ingresar_sucursal.php"
		</script>';



}






?>