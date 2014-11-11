<?php @session_start();
include ("codigosPHP/conexion.php");
include ("codigosPHP/permisousuario.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>B&uacute;squeda avanzada </title>
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
											if ($_SESSION['tipousuario']=='Cliente Basico' or $_SESSION['tipousuario']=='Cliente Gold' or $_SESSION['tipousuario']=='Cliente Premium'){?>
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
				 	<div class="about_wrapper"><h1>B&uacute;squed Personalizada</h1> </div>
						<div class="about-group"> 
                    
                  <form method="post" action="codigosPHP/resultado_busqueda_avanzada.php">
		<table >
        	<tr>
            	<th>Categor&iacute;a</th>
                <th>Selecci&oacute;n</th>
            </tr>	
            <tr>
            	<td>Tipo de Vehiculo</td>
                <td><select name="tpVehiculo" id="select">
					<?php 
						 $sql="SELECT nombre_tipo_vehiculo FROM tipo_vehiculo";
						 $rec=mysql_query($sql);
						 while($row=mysql_fetch_array($rec))							
							{ 
								 echo "<option>";
								 echo $row['nombre_tipo_vehiculo'];
								 echo "</option>"; 
							}
  					?>
        			</select>
                </td>	
            </tr> 
             <tr>
            	<td>Marca</td>
                <td><select name="marca" id="select" style="width:100px">
					<?php 
						 $sql="SELECT nombre_marca_vehiculo FROM marca_vehiculo";
						 $rec=mysql_query($sql);
						 while($row=mysql_fetch_array($rec))
							{
								 echo "<option>";
								 echo $row['nombre_marca_vehiculo'];
								 echo "</option>";	 
							}
  					?>
        			</select>
                </td>	
            </tr> 
            <tr>
            	<td>Transmisi&oacute;n</td>
                <td><select name="transmision" id="select" style="width:100px">
					<?php 
						 $sql="SELECT nombre_transmision FROM transmision";
						 $rec=mysql_query($sql);
						 while($row=mysql_fetch_array($rec))
							{
								 echo "<option>";
								 echo $row['nombre_transmision'];
								 echo "</option>";
								 
							}
  					?>
                     </select>      				 
                </td>
            </tr>
            <tr>
            	<td><label>Combustible</label></td>
                <td><select name="combus" id="select" style="width:100px">}
					<?php 
						 $sql="SELECT nombre_tipo_combustible FROM tipo_combustible";
						 $rec=mysql_query($sql);
						 while($row=mysql_fetch_array($rec))
							{
								 echo "<option>";
								 echo $row['nombre_tipo_combustible'];
								 echo "</option>";
								 
							}
  					?>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Motor</td>
                <td><select name="motor" id="select" style="width:100px">
        	 			 <option>1.000 cc</option>
         	 			 <option>1.100 cc</option>
            			 <option>1.200 cc</option>
                         <option>1.300 cc</option>
                         <option>1.400 cc</option>
                         <option>1.500 cc</option>
                         <option>1.600 cc</option>
                         <option>1.700 cc</option>
                         <option>1.800 cc</option>
                         <option>1.900 cc</option>
                         <option>2.000 cc</option>
                         <option>2.100 cc</option>
                         <option>2.200 cc</option>
                         <option>2.300 cc</option>
                         <option>2.400 cc</option>
                         <option>2.500 cc</option>
       				</select>
                </td>
            </tr>
            <tr>
                <td><label>Rango de precios</label></td>
                <td>
                <select name="valormin" id="select">
        				 <option>10.000</option>
                         <option>15.000</option>
                         <option>20.000</option>
                         <option>25.000</option>
                         <option>30.000</option>
                         <option>35.000</option>
                         <option>40.000</option>
                         <option>45.000</option>
                         <option>50.000</option>
                         <option>55.000</option>
                         <option>60.000</option>
                         <option>65.000</option>
                         <option>70.000</option>
                         <option>75.000</option>
                         <option>80.000</option>
                     </select>
                     <select name="valormax" id="select">
                         <option>85.000</option>
                         <option>80.000</option>
                         <option>75.000</option>
                         <option>70.000</option>
                         <option>65.000</option>
                         <option>60.000</option>
                         <option>55.000</option>
                         <option>50.000</option>
                         <option>45.000</option>
                         <option>40.000</option>
                         <option>35.000</option>
                         <option>30.000</option>
                         <option>25.000</option>
                         <option>20.000</option>
                         <option>15.000</option>
                 </select>
                
                </td>
            </tr>
               <tr>
               <td></td>
            	<td><input type="submit" align="right" value="Buscar"/></td>
            </tr>   
        </table>
       </form>
                    
                    
                    
                   		</div>
		  				
			</div>
            	 
                    <div class="header-para">
                            <div class="categories">
                                    
                            <div class="box-title">
                                <h1><span class="title-icon"></span><a href="">PAGINAS DE INTERES</a></h1>
                            </div>
                            <?php include ("includes/paginasinteres.php")?>
                            <div class="clear"></div>
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
