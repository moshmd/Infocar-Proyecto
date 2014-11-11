<?php
include("codigosPHP/conexion.php");
$consulta = "SELECT nombre_sucursal,id_sucursal FROM sucursal WHERE id_rentacar LIKE '$_POST[elegido]'";
$g=mysql_query($consulta);
if ($row = mysql_fetch_array($g)) {
	do {
		echo 
		'<option value="'.$row['id_sucursal'].'">'.$row['nombre_sucursal'].'</option>';
	}while($row = mysql_fetch_array($g));
}
?>

<?php /*
include("conexion.php");
$consulta = "SELECT * FROM pais WHERE continente_id LIKE '$_POST[elegido]'";
if ($row = mysql_fetch_array($consulta)) {
	do {
		echo 
		'<option value="'.$row['pais_id'].'">'.$row['pais_name'].'</option>';
	}while($row = $db->fetch_array($consulta));
} */
?>