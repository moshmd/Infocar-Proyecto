<?php
	if(!isset($_SESSION)){
		session_start();
	}
	
	include("conexion.php");
	$us 	= $_POST['usuario'];
	$pass 	= $_POST['pass'];
	
	if ($us=="" or $pass==""){
				echo '<script languaje = javascript> 
		alert("Ingrese todos los datos solicitados por favor")
		self.location = "../login.php"
		</script>';
	}else{
	$consulta = "SELECT nombre_usuario, clave_usuario, id_usuario, email_usuario, nombre_tipo_usuario FROM usuario, tipo_usuario where usuario.id_tipo_usuario = tipo_usuario.id_tipo_usuario AND nombre_usuario ='".$us."' AND clave_usuario='".$pass."'";
	$comprobar = mysql_query($consulta);
	$fila=mysql_fetch_array($comprobar);
	
	if (!$fila[0])
	{
		echo '<script languaje = javascript> 
		alert("Los datos Ingresados no son correctos, por favor intentelo nuevamente")
		self.location = "../login.php"
		</script>';
	} else{
		
		$_SESSION['iduser'] = $fila['id_usuario'];
		$_SESSION['tipousuario'] = $fila['nombre_tipo_usuario'];
		$_SESSION['usuario'] = $fila['nombre_usuario'];
		$_SESSION['correo'] = $fila['email_usuario'];
		
		//$x=$_SESSION['tipousuario'];
//	echo $x;
		header("location: ../index.php");
	}
	}

	
?>