<?  
  if ($_SESSION['tipousuario']=="Cliente Gold" or $_SESSION['tipousuario']=="Administrador"){
           }else
			 {
			  header('location: index.php');
				 }
			 ?>