<?  
  if ($_SESSION['tipousuario']=="Cliente Basico" or $_SESSION['tipousuario']=="Administrador"){
           }else
			 {
			  header('location: index.php');
				 }
			 ?>