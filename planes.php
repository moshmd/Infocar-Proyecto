<!DOCTYPE HTML>

<html>
<head>
<title>Inicio Infocar</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/planes.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>   
<!--slider-->
<script src="web/js/jquery.min.js"></script>
<script src="web/js/script.js" type="text/javascript"></script>
<script src="web/js/superfish.js"></script>
<style type="text/css">

</style>




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
				 	<div class="about_wrapper"><h1>Nuestros planes</h1>
					</div>
				    <div class="about-group">
		  			<div class="about-top">	
						
						<div class="grid span_2_of_3">
							<h3>¡Motiva el crecimiento de tu Rent a Car con Infocar!</h3>
						</div>
                        <div class="clear"></div> 
		  <p>No dejes de informarte sobre los planes que tenemos para tu empresa. Con los reportes que ofrecemos</p>
          <p> podrás saber realmente que es lo que están buscando tus clientes, cuales son sus preferencias, y podrás</p> <p>ser parte de un sistema de evaluaciones que motiven a los usuarios a utilizar este sitio para decidir en que Rent a Car pondrán su confianza</p>
						<div class="clear"></div> 
                        <div class="clear"></div>
                        <div class="clear"></div>
					
		   </div>
		</div>
        
        
        <div id="contenedor" align="center">
    <div id="contenidos" style="padding:3px 3px 3px 3px">
        <div id="columna1">PLAN BASICO</div>
        <div id="columna2">PLAN GOLD</div>
        <div id="columna2">PLAN PREMIUM</div>
    </div>
    <div id="contenidos">
        <div id="columna1" style="background-image:url(images/basico.jpg);background-repeat: repeat-x"><br><p>REPORTE DE BUSQUEDA POR MARCA</p><br>
                            <p>REPORTE DE EVALUACION POR SUCURSAL</p><br>
                            <p>10 INFORME DE CLIENTES QUE DESEAN OFERTAN Y PROMOCIONES</p><br>
                            <p>POCA EXPOSICION DE PUBLICIDAD</p><br>
        </div>
        <div id="columna2" style="background-image:url(images/basicoamarillo.jpg);background-repeat: repeat-x"><br><p>REPORTE DE BUSQUEDA POR MARCA Y TIPO DE VEHICULO</p><br>
                            <p>REPORTE DE EVALUACION POR SUCURSAL Y RENTACAR</p><br>
                            <p>20 INFORME DE CLIENTES QUE DESEAN OFERTAN Y PROMOCIONES</p><br>
                            <p>EXPOSICION MEDIA DE PUBLICIDAD</p><br>
        </div>
        <div id="columna2" style="background-image:url(images/basicogris.jpg);background-repeat: repeat-x"><br><p>REPORTE DE BUSQUEDA POR MARCA, TIPO DE VEHICULO Y TIPO DE COMBUSTIBLE</p><br>
                            <p>REPORTE DE EVALUACION POR SUCURSAL, RENTACAR MAS INFORME DE RANKING DE EVALUACIONES</p><br>
                            <p>COMPLETO INFORME DE CLIENTES QUE DESEAN OFERTAN Y PROMOCIONES</p><br>
                            <p>ALTA EXPOSICION DE PUBLICIDAD</p><br>
        </div>
    </div>
    <div id="contenidos">
        <div id="columna1" style="font-size:20px">$ 14.990</div>
        <div id="columna2" style="font-size:20px">$ 19.990</div>
        <div id="columna2" style="font-size:20px">$ 29.990</div>
    </div>
    <div id="contenidos">
        <div id="columna1"><a href="#">cotizar</a></div>
        <div id="columna2"><a href="#">cotizar</a></div>
        <div id="columna2"><a href="#">cotizar</a></div>
    </div>
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
