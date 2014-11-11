<?php @session_start();
include ("codigosPHP/conexion.php");
include ("codigosPHP/permisoadministrador.php")?>
<!DOCTYPE HTML>
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
				 	<div class="about_wrapper"><h1>Ingresar Nueva Sucursal al Sistema</h1> </div>
						<div class="about-group"> 
                    
           <form method="post" action="codigosPHP/insertasucursal.php">
  <table>
  <tr>
  <td>seleccione Rent a Car</td>
  <td><select name="rentacar">	
<option value="0">Seleccione</option>
<?php
$consulta = "SELECT nombre_rentacar,id_rentacar FROM rentacar";
$g=mysql_query($consulta);
if ($row = mysql_fetch_array($g)) {
	do {
		echo "<option value='";
		echo $row['id_rentacar']."'>";
		echo $row['nombre_rentacar'];
		echo "</option>";
		//EL ECHO COMENTADO HACE LO MISMO QUE LAS TRES LINEAS DE ARRIBA, SOLO QUE EN UNA. SE SEPARA POR FACILIDAD DE COMPRENSION
		//echo '<option value="'.$row[id_rentacar].'">'.$row[nombre_rentacar].'</option>';
	}while($row = mysql_fetch_array($g));
}?> </td>
  </tr>
  <tr>
  <td>Seleccione comuna</td>
  <td><select name="comuna">
  		<?php
        $sql="select id_comuna, nombre_comuna from comuna";
		$res=mysql_query($sql);
		while ($row=mysql_fetch_array($res)){
			echo "<option value='";
			echo $row['id_comuna']."'>";
			echo $row['nombre_comuna'];
			echo "</option>";
		
		}?>
  		</select>
  </td>
  </tr>
  <tr>
  <td>Nombre de la Sucursal</td>
  <td><input name="sucursal" type="text"></td>
  </tr>
    <tr>
      <td>Direccion de la Sucursal</td>
      <td><input name="direccion" type="text"></td>
    </tr>
    <tr>
    <td></td>
    <td align="right"><input type="submit" name="insertarsucursal.php" value="Ingresar"</td>
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
                            <div class="section group example">
                                
                                <div class="clear"></div>
                             </div>
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