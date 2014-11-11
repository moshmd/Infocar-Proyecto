<?  
  if ($_SESSION['tipousuario']=="Usuario" or $_SESSION['tipousuario']=="Administrador"){
           }else
			 {
			  header('location: index.php');
				 }
			 ?>