<?php @session_start();
include ("codigosPHP/permisoadministrador.php")?>
<!DOCTYPE HTML>
<html>
<head>
<title>Inicio Infocar</title>
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
				 	<div class="about_wrapper"><h1>Administrar el Sitio</h1> </div>
						<div class="about-group"> 
 <a href="ingresar_sucursal.php">Ingresar nueva sucursal</a><br><br>
<a href="ingresar_vehiculos.php">Ingresar veh&iacute;culos a la base de datos</a><br><br>
<a href="ingresar_usuarios.php">Ingresar usuarios</a><br><br>
<a href="ingresar_evaluacion.php">Generar una evaluaci&oacute;n de Rent a Car</a><br><br>
<a href="busqueda_avanzada.php">B&uacute;squeda avanzada</a><br><br>
<a href="muestra_vehiculos.php">Resumen de los veh&iacute;culos registrados en nuestro sitio</a><br><br>
<a href="mante.php">edición de usuarios</a>

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