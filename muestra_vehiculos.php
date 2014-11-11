<?php @session_start();
include ("codigosPHP/permisousuario.php")?>
<!DOCTYPE HTML>
<html>
<head>
<title>Stock de Veh&iacute;culos</title>
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
				 	<div class="about_wrapper"><h1>Stock de vehiculos</h1> </div>
						<div class="about-group"> 
                    <?php
	include "codigosPHP/conexion.php";

	
	$consultar=mysql_query("SELECT id_tipo_vehiculo,cantidad_puertas_vehiculo, id_tipo_combustible,capacidad_vehiculo,id_transmision, aire_acondicionado_vehiculo, cilindrada_motor, valor_vehiculo, id_sucursal, imagen_vehiculo from vehiculo");
	
	echo "<div id='contenedor'>
			<div id='contenidos' align='center' style='font-weight:bold'>
				<div id='columna1'>RENT A CAR</div>
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
//////////////////////////////////////////TRANSFORMACION DE ID A VALOR/////////////////////////////////////
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
////////////////////////////////////////////FIN TRANSFORMACION//////////////////////////////////////////////////////////////////////////
		echo  "
		<div id='contenidos'>
				<div id='columna1' align='center'><a href='http://www.".$nombreRen.".cl'><img src='$logo' width='130' height='50'></a></div>
				<div id='columna1' align='center'><img src='$imagen' width='150' height='100'></div>
		      		<div id='columna1' style='width:200px'> 
					<destacada>Vehiculo:</destacada><caracteristicas>$tpVehiculo</caracteristicas></br>
				    <destacada>Combustible:</destacada><caracteristicas> $combus</caracteristicas></br>
					<destacada>Asientos:</destacada> <caracteristicas>$cantAsientos</caracteristicas></br>
					<destacada>Puertas:</destacada> <caracteristicas>$puertas</caracteristicas></br>
					<destacada>Transmision:</destacada><caracteristicas> $trans</caracteristicas></br> 
					<destacada>A. acondicionado:</destacada><caracteristicas> $aire</caracteristicas></br>
					<destacada>Motor:</destacada> <caracteristicas>$motor</caracteristicas> </div>
					<div id='columna1' align='center'>$$valor</div>
				        			
			   </div>";

	}
	echo "</div>";
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
