<?php  
include "conexion.php";

	$ruta="imagenes";
	$archivo=$_FILES['imagen']['tmp_name'];
	$nombreArchivo=$_FILES['imagen']['name'];
	move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
	$ruta=$ruta."/".$nombreArchivo;

	$transmision=$_POST['Transmision'];
	$tipoVehiculo=$_POST['Tipo'];
	$sucursal=$_POST['combo2'];
	$combustible=$_POST['Combustible'];
	$marcaVehiculo=$_POST ['Marca'];
	$puertas=$_POST['Puertas'];
	$asientos=$_POST['Asientos'];
	$aire=$_POST['Aire'];
	$valor=$_POST['Valor'];
	$cilindrada=$_POST['Cilindrada'];
	
	//echo $sucursal;
		$sql= "SELECT id_transmision FROM transmision WHERE nombre_transmision = '$transmision'";
		$rec=mysql_query($sql);
		while($row=mysql_fetch_array($rec)){
		$trans=$row['id_transmision'];
		}

		$sql1= "SELECT id_tipo_vehiculo FROM tipo_vehiculo WHERE nombre_tipo_vehiculo = '$tipoVehiculo'";
		$rec1=mysql_query($sql1);
		while($row=mysql_fetch_array($rec1)){
		$tipo=$row['id_tipo_vehiculo'];
		}
		
		//$sql2= "SELECT Id_Sucursal FROM Sucursal WHERE Nombre_Sucursal = '$combo2'";
//		$rec2=mysql_query($sql2);
//		while($row=mysql_fetch_array($rec2)){
//		$suc=$row['Id_Sucursal'];
//		}
//		
		$sql3= "SELECT id_tipo_combustible FROM tipo_combustible WHERE nombre_tipo_combustible = '$combustible'";
		$rec3=mysql_query($sql3);
		while($row=mysql_fetch_array($rec3)){
		$comb=$row['id_tipo_combustible'];
		}
		
		$sql4= "SELECT id_marca_vehiculo FROM marca_vehiculo WHERE nombre_marca_vehiculo = '$marcaVehiculo'";
		$rec4=mysql_query($sql4);
		while($row=mysql_fetch_array($rec4)){
		$marca=$row['id_marca_vehiculo'];
		}

if ($sucursal==""){
	
	echo '<script languaje = javascript> 
		alert("ingrese todos los datos")
		location = "../ingresar_vehiculos.php"
		</script>';
	
	
	}else{
	
$insertar=mysql_query("INSERT INTO vehiculo VALUES('".$id."','".$trans."','".$tipo."','".$sucursal."','".$comb."','".$marca."','".$puertas."','".$asientos."','".$aire."','"."codigosPHP/".$ruta."','".$valor."','".$cilindrada."')");


	if($insertar)
		{
			echo '<script languaje = javascript> 
		alert("Ingresado Correctamente")
		location = "../ingresar_vehiculos.php"
		</script>';
			
		}
	else
		{
			echo"fallo insercion";
		}
		
	}
?>