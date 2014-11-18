<?php 

session_start();

if (!isset($_SESSION['usuario'])){

	

	}else{

		header('location: index.php');

		}





?><!DOCTYPE HTML>

<html>

<head>

<title>Inicio Infocar</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>   

<!--slider-->

<script src="web/js/jquery.min.js"></script>

<script src="web/js/script.js" type="text/javascript"></script>

<script src="web/js/superfish.js"></script>

</head>

<body>

<div class="header-bg">

	<div class="wrap"> 

		<div class="h-bg">

			<div class="total">

				<?php include ("includes/cabecera.php")?>	

		<div class="menu"> 	

			<?php include ("includes/menuinvitado.php")?>

		</div>

		<div class="banner-top">

			<div class="header-bottom">

                                 <div align="center"><form action="codigosPHP/validar_logeo.php" method="post" class="login"> 

                                 <table>

                                 <tr>

                                 <td>USUARIO</td>

                                 <td><input name="usuario" type="text"></td>

                                 </tr>

                                 <tr>

                                 <td>CLAVE</td>

                                 <td><input name="pass" type="password"></td>

                                 </tr>

                                 <tr>

                                 <td></td>

                                 <td><input name="login" type="button" value="Registrar" onclick="location='Registrar_usuarios.php'" />                            <input name="login" type="submit" value="Aceptar" /></td>

                                 </tr>                             

                                 </table>

                          

                            

                            

                          

                        </form>	

                        

                         </div>

   			</div>

		

		<div class="clear"></div>

		<?php include ("includes/pie.php")?>

</div>

</div>

</div>

</div>

</div>

</div>

</body>

</html>

