<?php @session_start();
include ("codigosPHP/conexion.php");
include ("codigosPHP/permisoadministrador.php")?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ingresar Usuarios</title>
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
				 	<div class="about_wrapper"><h1>Ingresar Usuarios</h1> </div>
						<div class="about-group"> 
                    
                   <form action="codigosPHP/insertausuario.php" method="post">

<table>
<tr>
    <td>tipo usuario</td>
    <td><select name="TipoUsuario">
          	<?php
				$sql="SELECT nombre_tipo_usuario from tipo_usuario";
				$consulta=mysql_query($sql);
				while($row=mysql_fetch_array($consulta)){
					echo "<option>";
					echo $row['nombre_tipo_usuario'];
					echo "</option>";
					}
			 ?>
          	</select></td>
  </tr>
  <tr>
  		<td>Estado</td>
  		<td><select name="estado">
    		<?php
				$sql="SELECT nombre_estado from estado";
				$consulta=mysql_query($sql);
				while($row=mysql_fetch_array($consulta)){
					echo "<option>";
					echo $row['nombre_estado'];
					echo "</option>";
					}
			 ?>    
	        </select>
        </td>
  </tr>
  <tr>
    <td>nombre usuario</td>
    <td> <input type="text" name="usuario" required></td>
  </tr>
  <tr>
    <td>clave </td>
    <td><input type="password" name="clave" required></td>
  </tr>
  <tr>
    <td>correo</td>
    <td><input type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="correo" required></td>
  </tr>
    <td>bot&oacute;n</td>
    <td> <input type="submit" name="login" value="ingresar"</td>
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
