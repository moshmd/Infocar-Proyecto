
<!DOCTYPE HTML>
<html>
<head>
<title>Inicio Infocar</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>   
<!--slider-->
<!--<script src="web/js/jquery.min.js"></script>-->
<script src="js/script.js" type="text/javascript"></script>
<script src="js/superfish.js"></script>

<?php 
$conn = null;
$host = 'mysql.webcindario.com';
$db =   'infocar3';
$user = 'infocar3';
$pwd =  'homero01';
try {
	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
	//echo 'Connected succesfully.<br>';
}
catch (PDOException $e) {
	echo '<p>Cannot connect to database !!</p>';
	exit;
}
?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    var map;
    var dir ="";
    $(document).ready(function(){
      map = new GMaps({
        div: '#map',
        lat: -36.752158,
        lng: -73.088264,
        zoom: 10
      });
    });
	<?php 
	$sql = 'SELECT `NOMBRE_SUCURSAL` , `DIRECCION_SUCURSAL` , `NOMBRE_RENTACAR` , `LOGO_RENTACAR` , `NOMBRE_COMUNA`
FROM `sucursal` , `rentacar` , `comuna`
WHERE `sucursal`.`ID_RENTACAR` = `rentacar`.`ID_RENTACAR`
AND `comuna`.`ID_COMUNA` = `sucursal`.`ID_COMUNA`';
    foreach ($conn->query($sql) as $row): ?>
		var dir ="Chile, "+"<?php echo $row['NOMBRE_COMUNA'] ?>, "+"<?php echo $row['DIRECCION_SUCURSAL'] ?>";
		Gcode(dir);
<?php endforeach;  ?>
	
        //var dir = "Chile, "+"Concepcion, "+"anibal pinto 2625";
        //Gcode(dir);

    function Gcode(direc) {
      GMaps.geocode({
      address: direc,
          callback: function(results, status){
              if(status=='OK'){
                  var latlng = results[0].geometry.location;
                  map.addMarker({
                      lat: latlng.lat(),
                      lng: latlng.lng(),
                      title: direc
                  });
               }else{
                   setTimeout(function() {
                    Gcode(direc);
                    }, 200);
               }
          }
      }); 
    
    }
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
                 
                 <h1>INFOCAR</h1>

					<iframe width="560" height="315" src="//www.youtube.com/embed/FGGwIf7llXw" frameborder="0" allowfullscreen></iframe>

                 
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
