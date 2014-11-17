<?php 

@session_start();

if (!isset($_SESSION['usuario'])){

	}else

	{

		header('location: index.php');

		}

?><!DOCTYPE HTML>

<html>

<head>

<title>Registro</title>

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

				 

		<div align="center"><form action="codigosPHP/registrausuario.php" method="post">

                    <table>

                        <tr>

                            <td align="right">Usuario</td>

                            <td><input type="text" name="usuario" required></td>

                        </tr>

                        <tr>

                            <td align="right">correo</td>

                            <td><input type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="email" required ></td>

                        </tr>

                        <tr>

                            <td align="right">Clave</td>

                            <td><input type="password" name="clave" required></td>

                        </tr>

                        	<td align="right" style="font-size:12px">¿Desea recibir ofertas<br>

                                 y/o promociones?</td>

                            <td align="right">

                                <select name="subcribirse">

                                    <option>SI</option>

                                    <option>NO</option>

                                </select>

                            </td>

                        </tr>

                        <tr>

                            <td></td>

                            <td align="right"> <input type="submit" name="login" value="registrar"></td>

                        </tr>

                        <tr>



                    </table>

		</form></div>

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

