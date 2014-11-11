<?php @session_start();
include ("codigosPHP/permisoclientes.php")?>
<!DOCTYPE HTML>
<html>
<head>
<title>Reportes de Clientes</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/tablaresultados.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">   
<!--slider-->
<script src="web/js/jquery.min.js"></script>
<script src="web/js/script.js" type="text/javascript"></script>
<script src="web/js/superfish.js"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
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
				 	<div class="about_wrapper"><h1>Reportes</h1> </div>
						<div class="about-group"> 
                        
                        <div id="contenedor">
                            <div id="contenidos">
                                <div id="columna1">
                                 <ul id="MenuBar1" class="MenuBarVertical " style="background-color:">
                            <li><a class="MenuBarItemSubmenu" href="#">Veh&iacute;culos m&aacute;s buscados</a>
                              <ul>
                                <li><a href="busqueda_marcavehiculos.php" target="_blank">Por marca</a></li>
                                <?php 
								if ($_SESSION['tipousuario']=='Cliente Gold' or $_SESSION['tipousuario']=='Cliente Premium'){?>
									<li><a href="busqueda_tipovehiculos.php" target="_blank">Por tipo de veh&iacute;culo</a></li>
                                
									<?php }
									if ($_SESSION['tipousuario']=='Cliente Premium'){ ?>
									
									<li><a href="busqueda_combusvehiculos.php" target="_blank">Por tipo de combustible</a></li>
										<?php }?>
                                    
                                
                              </ul>
                            </li>
                            <li><a href="#" class="MenuBarItemSubmenu">Evaluaciones de usuarios</a>
                              <ul>
                                <li><a href="valoracionrentacar.php" target="_blank">Notas por sucursal</a></li>
                                <li><a href="promediodenotasporsucursal.php" target="_blank">Promedios sucursales</a></li>
                                <li><a href="promediodenotasporentacar.php" target="_blank">Promedios Rent a Car</a></li>
                              </ul>
                            </li>
                            <li><a href="usuariossuscripcion.php" target="_blank">Usuarios para promociones</a></li>
</ul>
                                </div>
                                <div id="columna1" style="border: 0px solid #000;width:700px; vertical-align:super; text-align:justify" >
                                 <div class="team">
						<h2>¿COMO FUNCIONA?</h2>
						<p>En la parte izquierda Ud. cuenta con un men&uacute;, en el cual puede revisar los distintos reportes que le ofrecemos, los cuales le permitir&aacute;n tener de forma clara cuales son los inter&eacute;s de los usuarios de Rent a Car.</p>
					    
				  </div>
                                
                                </div>
                            </div>
                        </div>
                        
                        

                   
                          
                  
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
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
