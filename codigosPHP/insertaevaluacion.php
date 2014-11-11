<? session_start();
include ("conexion.php");

$Usuario=($_SESSION['usuario']);
$Sucursal=$_POST['combo2'];
$nota=$_POST['nota'];
$comentario=$_POST['comentario'];
$fecha=date("y/m/d");

//echo $Usuario, $Sucursal, $nota, $comentario; 

$sql= "SELECT id_usuario FROM usuario WHERE nombre_usuario =  '$Usuario'";
$rec=mysql_query($sql);
while($row=mysql_fetch_array($rec)){
	$us=$row['id_usuario'];
	}
	
	
//$sql2= "SELECT id_sucursal FROM sucursal WHERE nombre_sucursal =  '$Sucursal'";
//$rec=mysql_query($sql2);
//while($row=mysql_fetch_array($rec)){
//	$suc=$row['id_sucursal'];
//	}

//echo 'usuario:'.$us, 'sucursal:'.$suc;
//$InsertaEval=mysql_query("INSERT INTO usuario VALUES('".$id."','".$tipo."','".$est."','".$usuario."','".$clave."','".$correo."')");

if($Sucursal==""){
	  echo '<script languaje = javascript> 
			alert("Ingrese todos los datos para realizar la evaluacion")
			location = "../ingresar_evaluacion.php"
			</script>
			';
			
	
	} else {

$insertaEv=mysql_query ("insert into evalua values('".$id."','".$us."','".$Sucursal."','".$nota."','".$comentario."','".$fecha."')");

	  echo '<script languaje = javascript> 
			alert("Su evaluacion ha sido ingresada satisfactoriamente")
			location="../ingresar_evaluacion.php"
			</script>';
	}
?>