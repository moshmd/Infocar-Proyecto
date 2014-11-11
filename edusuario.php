<?php 
include "codigosPHP/conexion.php";
$nombre = $_POST['nombre_usuario'];
$email = $_POST['email'];
$tpusuario = $_POST['tpusuario'];
$estado = $_POST['estado'];
$id = $_POST['buscar'];


$sql=mysql_query("UPDATE usuario SET NOMBRE_USUARIO ='".$nombre."', email_usuario='".$email."' where id_usuario='".$id."' ");
header("location:mante.php");
?> 