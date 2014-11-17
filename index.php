
<?php @session_start()?>
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
                 <div class="video">
				 <iframe class="ytb-embed" width="666" height="500" src="//www.youtube.com/embed/FGGwIf7llXw" frameborder="0" allowfullscreen></iframe></div>
		  			<div class="content-wrapper">		  
						<div class="content-top">
							  	<div class="box_wrapper"><h1>NUESTROS PLANES PARA CLIENTES</h1>
								</div>
							 <div class="text"> 	
								<div class="grid_1_of_3 images_1_of_3">
									<div class="grid_1">
										<a href="single.html"><img src="images/pic5.jpg" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">PLAN BASICO</p>
												<p class="title1">Aprovecha las ofertas de lanzamiento</p>
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom">$ 14.990</span>
								        				<span class="actual">$ 34.990</span>
													</div>
													<div class="cart-button">
														<button class="button" onClick="location.href='planes.php'"><span>Detalles</span></button>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
							</div>
									<div class="grid_1_of_3 images_1_of_3">
										  <div class="grid_1">
										<a href="single.html"><img src="images/pic6.jpg" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">PLAN GOLD</p>
												<p class="title1">Aprovecha las ofertas de lanzamiento</p>
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom">$ 19.990</span>
								        				<span class="actual">$ 54.990</span>
													</div>
													<div class="cart-button">
														<button class="button" onClick="location.href='planes.php'"><span>Detalles</span></button>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
									</div>
									<div class="grid_1_of_3 images_1_of_3">
										  <div class="grid_1">
										<a href="single.html"><img src="images/pic4.jpg" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">PLAN PREMIUM</p>
												<p class="title1">Aprovecha las ofertas de lanzamiento</p>
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom">$ 29.990</span>
								        				<span class="actual">$ 69.990</span>
													</div>
													<div class="cart-button">
														<button class="button" onClick="location.href='planes.php'"><span>Detalles</span></button>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
									</div><div class="clear"></div>
								</div>
						</div>
					</div>
		</div>
		<div class="header-para">
				<div class="categories">
						
				<div class="box-title">
					<h1><span class="title-icon"></span>PAGINAS DE INTERES</h1>
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
