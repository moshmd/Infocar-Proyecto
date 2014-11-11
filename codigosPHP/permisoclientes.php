<?  
  if ($_SESSION['tipousuario']=="Cliente Basico" or $_SESSION['tipousuario']=="Administrador" or $_SESSION['tipousuario']=="Cliente Gold" or $_SESSION['tipousuario']=="Cliente Premium"){
           }else
			 {
			  header('location: index.php');
				 }
			 ?>