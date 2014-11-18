<?php @session_start();

include ("codigosPHP/conexion.php");

include ("codigosPHP/permisousuario.php")?>

<!DOCTYPE HTML>

<html>

<head>

<title>Realizar Evaluaci&oacute;n</title>

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

				 	<div class="about_wrapper"><h1>Realizar Evaluaci&oacute;n</h1> </div>

						<div class="about-group"> 

                    

<form method="post" action="codigosPHP/insertaevaluacion.php">

  <table>

  <tr>

  <td>Rent a Car a evaluar</td>

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

  <td>Sucursal a evaluar</td>

  <td><select name="combo2" id="combo2" style="width:180px"></select></td>

  

  </tr>

        <tr>

      <td>Nota</td>

      <td><select name="nota">

      <option>1.0</option>

      <option>2.0</option>

      <option>3.0</option>

      <option>4.0</option>

      <option>5.0</option>

      <option>6.0</option>

      <option>7.0</option>

      	</td>

    </tr>

    <tr>

      <td>Comentario</td>

      	<td><textarea name="comentario" style="margin: 0px; height:62px; width:174px;"></textarea>

        </td>

    </tr>

    <tr>

      <td>boton</td>

      <td><input type="submit" name="SUBIR EVALUACION"></td>

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

</body>

</html>

