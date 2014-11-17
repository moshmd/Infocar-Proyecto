<?php

include ("conexion.php");

$usuario = $_POST['usuario'];

$clave = $_POST['clave'];

$clave	=	md5($clave);

$email = $_POST['email'];

$subcri = $_POST['subcribirse'];



if ($usuario=="" or $clave=="" or $email==""){

	echo '<script languaje = javascript> 

			alert("Por favor Ingrese todos los datos para registrar")

			location = "../registrar_usuarios.php"

			</script>';

	

	}else{

		$sql=("select nombre_usuario from usuario where nombre_usuario='$usuario'");

		$res=mysql_query($sql);

		while ($row=mysql_fetch_array($res)){

			$us=$row['nombre_usuario'];	

		}

				if($usuario==$us){

					echo '<script languaje = javascript> 

						alert("El nombre de usuario ya se encuentra registrado, por favor ingrese otro")

						location = "../registrar_usuarios.php"

						</script>';

					}

					else{

						$registro=mysql_query("insert into usuario values('".$id."','1','1','".$usuario."','".$clave."','".$email."','".$subcri."')");

						echo '<script languaje = javascript> 

						alert("Usuario registrado existosamente")

						location = "../login.php"

						</script>';

						}

					

	}



?>