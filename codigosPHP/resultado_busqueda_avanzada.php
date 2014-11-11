<?php @session_start();
include ("permisousuario.php")?>
<!DOCTYPE HTML>
<html>
<head>
<title>Resultado de la búsqueda</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/tablaresultados.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>   
<!--slider-->
<script src="../web/js/jquery.min.js"></script>
<script src="../web/js/script.js" type="text/javascript"></script>
<script src="../web/js/superfish.js"></script>
</head>
<body>
<div class="header-bg">
	<div class="wrap"> 
		<div class="h-bg">
			<div class="total">
				
				<div class="header">
					<div class="box_header_user_menu">
						<ul class="user_menu">
                        
                        <?php 
						if(!isset($_SESSION['usuario'])){?>
			<li class=""><a href="registrar_usuarios.php"><div class="button-t"><span>REGISTRATE</span></div></a></li>
            <li class="last"><a href="login.php"><div class="button-t"><span>INGRESA</span></div></a></li>
                        </ul>
                       </div>
						<? }else {?>
            <li class=""><a href="cerrarsesion.php"><div class="button-t"><span>CERRAR SESION</span></div></a></li>            			</div>
           				 <?php }?>
                           
					<div class="clear"></div> 
					<div class="header-bot">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt=""/></a>
						</div>
					<div class="clear"></div> 
				</div>		
		</div>
				
				<?php if (!isset($_SESSION['usuario'])){?>
					 	<div class="menu"> 	
                        <div class="top-nav"> 
					<ul>
						<li><a href="../index.php">Inicio</a></li>
						<li><a href="../nosotros.php">Quienes Somos</a></li>
						<li><a href="#">Planes para clientes</a></li>
                        <li><a href="../contacto.php">Contáctenos</a></li>
                       </ul>
					<div class="clear"></div> 
				</div>	
                    	</div>
						<?php } else {
								if ($_SESSION['tipousuario']=='Usuario'){?>
									<div class="menu"> 	
                        			<div class="top-nav"> 
					<ul>
						<li><a href="../index.php">Inicio</a></li>
						<li><a href="../nosotros.php">Quienes Somos</a></li>
						<li><a href="../busqueda_avanzada.php">Busqueda Avanzada</a></li>
                        <li><a href="../ingresar_evaluacion.php">Evaluar Rent a Car</a></li>
                        <li><a href="../mostrar_comentario.php">Ver Comentarios</a></li>
                        <li><a href="../promediodenotasporentacar.php" target="_blank">Ranking de Rentacar</a></li>
                        <li><a href="../muestra_vehiculos.php">Ver Vehiculos</a></li>
                        <li><a href="../contacto.php">Contáctenos</a></li>
					</ul>
					<div class="clear"></div> 
				</div>
                    				</div>
									<?php } else {
											if ($_SESSION['tipousuario']=='Cliente Basico' or $_SESSION['tipousuario']=='Cliente Gold' or $_SESSION[		'tipousuario']=='Cliente Premium'){?>
												<div class="menu"> 	
												<?php include ("../includes/menucliente.php")?>	
												</div>
												<?php } else {
															if ($_SESSION['tipousuario']=='Administrador'){?>
                                                            <div class="menu"> 	
                                                            <div class="top-nav"> 
					<ul>
						<li><a href="../index.php">Inicio</a></li>
						<li><a href="../nosotros.php">Quienes Somos</a></li>
						<li><a href="../sitio_administrador.php">Menu De Administrador</a></li>
                        </ul>
					<div class="clear"></div> 
				</div>
                                                            </div>
															<?php }
                                                            }
													}
                                       }?>
 										
	<div class="banner-top">
			<div class="header-bottom">
			<div class="header_bottom_right_images">
				 	<div class="about_wrapper"><h1>Resultado de la Busqueda</h1> </div>
						<div class="about-group"> 
                       
                        <?php
session_start();
include ("permisousuario.php");
	 include ("conexion.php");
	 
	 
	  	$user=$_SESSION['correo'];
		$tpVehiculo=$_POST['tpVehiculo'];
		$marca = $_POST['marca'];
		$trans = $_POST['transmision'];
		$combus = $_POST['combus'];
		$motor = $_POST['motor'];
		$valorMin = $_POST['valormin'];
		$valorMax = $_POST['valormax'];
		$fecha = date("Y/m/d");
		$insertar=mysql_query("INSERT INTO busqueda VALUES('".$id."','".$user."','".$fecha."','".$marca."','".$combus."','".$tpVehiculo."','".$trans."','".$motor."','".$valorMin."','".$valorMax."')");
		//////////////////////////////////////OBTENER ID DE LAS SELECCION DE BUSQUEDA///////////////////////////////////////////
		$sql="SELECT id_tipo_vehiculo FROM tipo_vehiculo where nombre_tipo_vehiculo ='$tpVehiculo'";
						 $rec=mysql_query($sql);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $tpVehiculo=$row['id_tipo_vehiculo'];
							}
		$sql2="SELECT id_marca_vehiculo FROM marca_vehiculo where nombre_marca_vehiculo ='$marca'";
						 $rec=mysql_query($sql2);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $marca=$row['id_marca_vehiculo'];
							}
		$sql3="SELECT id_transmision FROM transmision where nombre_transmision ='$trans'";
						 $rec=mysql_query($sql3);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $trans=$row['id_transmision'];
							}
		$sql3="SELECT id_tipo_combustible FROM tipo_combustible where nombre_tipo_combustible ='$combus'";
						 $rec=mysql_query($sql3);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $combus=$row['id_tipo_combustible'];
							}

		//////////////////////////////////FIN DE OBTENSION ID DE LAS SELECCION DE BUSQUEDA///////////////////////////////////////
		//echo $tpVehiculo,$marca,$trans,$combus,$motor,$valorMin,$valorMax;
	$consultar = mysql_query("SELECT id_tipo_vehiculo, cantidad_puertas_vehiculo, id_tipo_combustible, capacidad_vehiculo, id_transmision, aire_acondicionado_vehiculo, cilindrada_motor, valor_vehiculo, id_sucursal, imagen_vehiculo, id_sucursal
			FROM vehiculo
			WHERE id_tipo_vehiculo =  '$tpVehiculo'
			AND id_marca_vehiculo =  '$marca'
			AND id_transmision =  '$trans'
			AND id_tipo_combustible =  '$combus'
			AND cilindrada_motor =  '$motor'
			AND valor_vehiculo
			BETWEEN  '$valorMin'
			AND  '$valorMax'");

	echo "<div id='contenedor'>
			<div id='contenidos' align='center' style='font-weight:bold'>
				<div id='columna1'>RENT A CAR</div>
				<div id='columna1'>SUCURSAL</div>
				<div id='columna1'>VEHICULO</div>
				<div id='columna1'>CARACTERISTICAS</div>
				<div id='columna1'>VALOR POR DIA</div>	
			</div>
			";
	while($autos=mysql_fetch_array($consultar))
	{	
		$tpVehiculo=$autos['id_tipo_vehiculo'];
		$puertas=$autos['cantidad_puertas_vehiculo'];
		$combus=$autos['id_tipo_combustible'];
		$cantAsientos=$autos['capacidad_vehiculo'];
		$trans=$autos['id_transmision'];
		$aire=$autos['aire_acondicionado_vehiculo'];
		$motor=$autos['cilindrada_motor'];
		$valor=$autos['valor_vehiculo'];
		$sucursal=$autos['id_sucursal'];
		$imagen=$autos['imagen_vehiculo'];

		



/////////////////////////////TRANSFORMACION DE ID A VARIABLE/////////////////////////////////////////////
		$sql="SELECT nombre_tipo_vehiculo FROM tipo_vehiculo where id_tipo_vehiculo ='$tpVehiculo'";
						 $rec=mysql_query($sql);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $tpVehiculo=$row['nombre_tipo_vehiculo'];
							}
		$sql2="SELECT nombre_tipo_combustible FROM tipo_combustible where id_tipo_combustible ='$combus'";
						 $rec=mysql_query($sql2);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $combus=$row['nombre_tipo_combustible'];
							}
		$sql3="SELECT nombre_transmision FROM transmision where id_transmision ='$trans'";
						 $rec=mysql_query($sql3);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $trans=$row['nombre_transmision'];
							}
		$sql4="SELECT nombre_rentacar,logo_rentacar FROM rentacar, sucursal where rentacar.id_rentacar = sucursal.id_rentacar AND id_sucursal ='$sucursal'";
						 $rec=mysql_query($sql4);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $logo=$row['logo_rentacar'];
								 $nombreRen=$row['nombre_rentacar'];
							}
		$sql5="SELECT nombre_sucursal,direccion_sucursal FROM sucursal where id_sucursal ='$sucursal'";
						 $rec=mysql_query($sql5);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 $sucursal=$row['nombre_sucursal'];
								 $dir=$row['direccion_sucursal'];
							}

/////////////////////////////////////////TERMINO TRANSFORMACION////////////////////////////////////
		echo  "
		<div id='contenidos'>
				<div id='columna1' align='center'><a href='http://www.".$nombreRen.".cl'><img src='../".$logo."' width='130' height='50'></a></div>
				<div id='columna1' style='width:200px' align='center'> <destacada>Sucursal:</destacada></br>$sucursal
					<destacada>Direccion:</destacada></br>$dir</div>
				
				<div id='columna1' align='center'><img src='/".$imagen."' width='150' height='100'></div>
		      		<div id='columna1' style='width:200px;text-size:11px'> 
					<destacada>Vehiculo:</destacada>$tpVehiculo</br>
				    <destacada>Combustible:</destacada> $combus</br>
					<destacada>Asientos:</destacada> $cantAsientos</br>
					<destacada>Puertas:</destacada> $puertas</br>
					<destacada>Transmision:</destacada> $trans</br> 
					<destacada>A. acondicionado:</destacada> $aire</br>
					<destacada>Motor:</destacada> $motor </div>
					<div id='columna1' align='center'>$$valor</div>
				        			
			  </div>";

	}
	echo "</div>";
	
?>
 

                    
                   		</div>
		  				
			</div>
            	 
                       
    
		<div class="clear"></div>
		<?php include ("../includes/pie.php")?>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>