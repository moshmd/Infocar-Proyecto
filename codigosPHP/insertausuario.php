<? include ("conexion.php");

$TipoUsuario=$_POST['TipoUsuario'];
$Estado=$_POST['estado'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$correo=$_POST['correo'];

//echo $TipoUsuario, $Estado, $usuario, $clave, $correo;
if ($TipoUsuario=="" or $Estado=="" or $usuario=="" or $clave=="" or $correo==""){
	
	echo '<script languaje = javascript> 
		alert("Por favor complete todos los campos")
		location = "../ingresar_usuarios.php"
		</script>';
	
	} else {
$sql= "SELECT id_tipo_usuario FROM tipo_usuario WHERE nombre_tipo_usuario =  '$TipoUsuario'";

$rec=mysql_query($sql);

while($row=mysql_fetch_array($rec)){
	$tipo=$row['id_tipo_usuario'];
	}
	
$sql2= "SELECT id_estado FROM estado WHERE nombre_estado =  '$Estado'";

$rec2=mysql_query($sql2);

while($row=mysql_fetch_array($rec2)){
	$est=$row['id_estado'];
	}
	
$InsertaUsuario=mysql_query("INSERT INTO usuario VALUES('".$id."','".$tipo."','".$est."','".$usuario."','".md5($clave)."','".$correo."')");

echo '<script languaje = javascript> 
		alert("Ingresado Correctamente")
		location = "../ingresar_usuarios.php"
		</script>';
	}
?>