<?php @session_start();
include ("codigosPHP/conexion.php");
include ("codigosPHP/permisoadministrador.php")?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ingresar Veh&iacute;culos</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>   
<!--slider-->
<script src="web/js/jquery.min.js"></script>
<script src="web/js/script.js" type="text/javascript"></script>
<script src="web/js/superfish.js"></script>

<script language="javascript" src="js/jquery-1.3.min.js"></script>
<script language="javascript">
$(document).ready(function(){
	// Parametros para e combo1
   $("#combo1").change(function () {
   		$("#combo1 option:selected").each(function () {
			//alert($(this).val());
				elegido=$(this).val();
				$.post("combo1.php", { elegido: elegido }, function(data){
				$("#combo2").html(data);
				//$("#combo3").html("");
			});			
        });
   })
});
</script>


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
				 	<div class="about_wrapper"><h1>Ingresar veh&iacute;culos</h1> </div>
						<div class="about-group"> 
                    
<form method="post" action="codigosPHP/insertavehiculo.php" enctype="multipart/form-data">
  <table width="289">
  <tr>
  <td>rentacar</td>
  <td><select name="combo1" id="combo1" style="width:180px">	
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
		//echo '<option value="'.$row[Id_Rentacar].'">'.$row[Nombre_Rentacar].'</option>';
	}while($row = mysql_fetch_array($g));
}

?> </td>
  
  </tr>
      <tr>
      <td>Sucursal</td>
      <td><select name="combo2" id="combo2" style="width:180px"></select></td>
    </tr>
    <tr>
      <td>Tipo</td>
      <td><select name="Tipo" style="width:180px">
          	<?php
				$sql="SELECT nombre_tipo_vehiculo from tipo_vehiculo";
				$consulta=mysql_query($sql);
				while($row=mysql_fetch_array($consulta)){
					echo "<option>";
					echo $row['nombre_tipo_vehiculo'];
					echo "</option>";
					}
			 ?></td>
    </tr>
    <tr>
      <td>Transmisión</td>
      <td><select name="Transmision" style="width:100px">
          	<?php
				$sql="SELECT nombre_transmision from transmision";
				$consulta=mysql_query($sql);
				while($row=mysql_fetch_array($consulta)){
					echo "<option>";
					echo $row['nombre_transmision'];
					echo "</option>";
					}
			 ?>
          	</select>
      
      
      </td>
    </tr>
    <tr>
      <td>Combustible</td>
      <td><select name="Combustible" style="width:100px">
          	<?php
				$sql="SELECT nombre_tipo_combustible from tipo_combustible";
				$consulta=mysql_query($sql);
				while($row=mysql_fetch_array($consulta)){
					echo "<option>";
					echo $row['nombre_tipo_combustible'];
					echo "</option>";
					}
			 ?></td>
    </tr>
    <tr>
      <td>Marca</td>
      <td><select name="Marca" style="width:100px">
          	<?php
				$sql="SELECT nombre_marca_vehiculo from marca_vehiculo";
				$consulta=mysql_query($sql);
				while($row=mysql_fetch_array($consulta)){
					echo "<option>";
					echo $row['nombre_marca_vehiculo'];
					echo "</option>";
					}
			 ?></td>
    </tr>
    <tr>
      <td>Cantidad Puertas</td>
      <td><select name="Puertas" style="width:50px">
      		<option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            </select></td>
    </tr>
    <tr>
      <td>Asientos</td>
      <td><select name="Asientos" style="width:50px">
      		<option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            </select></td>
    </tr>
    <tr>
      <td>Aire Acond.</td>
      <td><select name="Aire" style="width:50px">
      		<option>Si</option>
            <option>No</option>
            </select></td>
    </tr>
    <tr>
      <td>Imagen</td>
      <td><input type="file" name="imagen"/></td>
    </tr>
     <tr>
      <td>Cilindrada</td>
      <td><select name="Cilindrada" style="width:75px">
        	  <option>  800 cc</option>
         	  <option>  900 cc</option>
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
          </select></td>
    </tr>

    <tr>
      <td>Valor Arriendo</td>
      <td>$<select name="Valor" style="width:75px">
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
         	  <option>85.000</option>
          </select></td>
    </tr>
   
    <tr>
      <td></td>
      <td><input type="submit" name="ingresar" value="Ingresar vehiculo"></td>
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
