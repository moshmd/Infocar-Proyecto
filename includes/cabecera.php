<?php @session_start()?>


<div class="header">
					<div class="box_header_user_menu">
						<ul class="user_menu">
                        
                        <?php 
						if(!isset($_SESSION['usuario'])){?>
			<li class=""><a href="registrar_usuarios.php"><div class="button-t"><span>REGISTRATE</span></div></a></li>
            <li class="last"><a href="login.php"><div class="button-t"><span>INGRESA</span></div></a></li>
                        </ul>
                       </div>
						<? }else {?>
            <li class=""><a href="codigosPHP/cerrarsesion.php"><div class="button-t"><span>CERRAR SESION</span></div></a></li>            			</div>
           				 <?php }?>
                           
					<div class="clear"></div> 
					<div class="header-bot">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt=""/></a>
						</div>
					<div class="clear"></div> 
				</div>		
		</div>