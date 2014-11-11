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
				 	<div class="about_wrapper"><h1>Quienes Somos</h1>
					</div>
				    <div class="about-group">
		  			<div class="about-top">	
						<div class="grid images_3_of_1">
							<img src="images/pic7.jpg" alt=""/>
						</div>
						<div class="grid span_2_of_3">
							<h3>Motivado equipo de estudiantes de Ingeniería Inform&aacute;tica</h3>
							<p>A un paso de sacar la carrera de Ingenier&iacute;a.</p>
							<p>Con grandes expectativas una vez que nos titulemos</p>
						</div><div class="clear"></div> 
					</div>
			   		  	
			   <div class="team">
						<h2>Nuestra Visi&oacute;n</h2>
						<p>Consolidarnos como el sitio web m&aacute;s importante para aquellas personas que buscan informaci&oacute;n sobre rent a car de forma r&aacute;pida y f&aacute;cil</p>
					    
				  </div>
				  <div class="team">	
						
							<h2>Nuestra Misi&oacute;n</h2>
							<p>Ayudar a las personas a encontrar de forma r&aacute;pida y f&aacute;cil el rent a car que mejor se adapte a sus necesidades</p>
						<div class="clear"></div> 
					</div>
		   </div>
		</div>
		<div class="header-para">
				<div class="categories">
						
				<div class="box-title">
					<h1><span class="title-icon"></span><a href="">PAGINAS DE INTERES</a></h1>
				</div>
				<?php include("includes/paginasinteres.php")?>
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
