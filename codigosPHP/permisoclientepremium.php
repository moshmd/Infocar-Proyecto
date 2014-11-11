<?  
  if ($_SESSION['tipousuario']=="Cliente Premium" or $_SESSION['tipousuario']=="Administrador"){
           }else
			 {
			  header('location: index.php');
				 }
			 ?>