<? 
@session_start();

if($_SESSION['usuario']){
	session_destroy();
	echo '<script language = javascript>
	alert("su sesion ha terminado correctamente")
	location= "../index.php"
	</script>';
 } else{
	echo '<script language = javascript>
	alert("No ha iniciado ninguna sesion, por favor registrese")
	location= "../index.php"
	</script>';} ?>
	
    
    