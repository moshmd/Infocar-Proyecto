<?php @session_start();

include ("codigosPHP/permisousuario.php")?>

<!DOCTYPE HTML>

<html>

<head>

<title>Comentarios</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/tablaresultados.css" rel="stylesheet" type="text/css" media="all" />

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

				<?php include ("includes/cabecera.php");

				if (!isset($_SESSION['usuario'])){?>

					 	<div class="menu"> 	

                        <?php include ("includes/menuinvitado.php")?>	

                    	</div>

						<?php } else {

								if ($_SESSION['tipousuario']=='Usuario'){?>

									<div class="menu"> 	

                        			<?php include ("includes/menuusuario.php")?>	

                    				</div>

									<?php } else {

											if ($_SESSION['tipousuario']=='Cliente Basico' or $_SESSION['tipousuario']=='Cliente Gold' or $_SESSION[		'tipousuario']=='Cliente Premium'){?>

												<div class="menu"> 	

												<?php include ("includes/menucliente.php")?>	

												</div>

												<?php } else {

															if ($_SESSION['tipousuario']=='Administrador'){?>

                                                            <div class="menu"> 	

                                                            <?php include ("includes/menuadministrador.php")?>	

                                                            </div>

															<?php }

                                                            }

													}

                                       }?>

 										

	<div class="banner-top">

			<div class="header-bottom">

			<div class="header_bottom_right_images">

				 	<div class="about_wrapper"><h1>Comentarios de usuarios</h1> </div>

						<div class="about-group"> 

                  <!-- "<div id='contenedor'>

			<div id='contenidos' align='center' style='font-weight:bold'>

				<div id='columna1'>RENT A CAR</div>

				<div id='columna1'>VEHICULO</div>

				<div id='columna1'>CARACTERISTICAS</div>

				<div id='columna1'>VALOR POR DIA</div>	

			</div>

			";-->

                   

                   <?php 

include "codigosPHP/conexion.php";

echo"<div id='contenedor'>";

		

		

$sql=mysql_query("SELECT fecha_evalua, nombre_usuario, nota_evalua, nombre_rentacar, nombre_sucursal, comentario_evalua  from evalua, usuario, sucursal, rentacar where evalua.id_usuario = usuario.id_usuario and evalua.id_sucursal = sucursal.id_sucursal and sucursal.id_rentacar = rentacar.id_rentacar");

	while($row=mysql_fetch_array($sql)){

			$fecha=$row['fecha_evalua'];

			$user=$row['nombre_usuario'];

			$nota=$row['nota_evalua'];

			$nrenta=$row['nombre_rentacar'];

			$nsucur=$row['nombre_sucursal'];

			$comentario=$row['comentario_evalua'];



		echo "

		  <div id='contenidos'>

		  	<div id='columna1' style='width:150px'><destacada> Usuario:</destacada><caracteristicas>$user</caracteristicas><br/>

				<destacada>Nota:</destacada><caracteristicas>$nota</caracteristicas><br/>

				<destacada>Rentacar:</destacada><caracteristicas>$nrenta</caracteristicas><br/>

				<destacada>Sucursal:</destacada><caracteristicas>$nsucur</caracteristicas><br/>

				<destacada>Fecha:</destacada><caracteristicas>$fecha</caracteristicas></br>

			</div>

			<div id='columna1' style='width:200px;vertical-align:center'><textarea rows='5' disabled>$comentario</textarea></div>

		  </div>";

		}

echo"</div>";

?>

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

